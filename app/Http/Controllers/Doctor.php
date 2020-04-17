<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\Clinic_Diagnosis;
use App\Clinic_Investigations;
use App\Clinic_Observations;
use App\Clinic_Problems;
use App\clinicNotes_advices;
use App\Clinics;

use App\DoctorApt_Infos;
use App\DoctorApt_Time;
use App\General_Infos;
use App\Info_Details;
use App\Medical_History;
use App\Patient_Infos;
use App\Patients;
use App\Prescriptions;
use App\User;
use App\User_General_Infos;
use App\UsersGenInfo_of_SubMasterDoctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Doctor extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       public function all_doctors($dr=null){
        $clinic_id=Auth::user()->the_clinic_id();
        //return User::all()->toArray();
            return    DB::table('users as u')
            ->join('role_user as r','r.user_id','=','u.id')
            ->join('roles as rl','rl.id','=','r.role_id')
            ->join('UsersGenInfo_of_SubMasterDr as ugi','ugi.user_id','=','u.id')
            ->join('general_infos as gi','gi.id','=','ugi.general_info_id')
            ->join('masterDr_and_Clinics as mc','mc.id','=','ugi.masterDr_and_clinic_id')
            ->where('rl.all_roles','Doktor')->where('clinic_id',$clinic_id)->where("name","like","%".$dr."%")
            ->select("u.id",'u.name','u.surname','u.usr_name','gi.gender','gi.status','gi.department'
                                ,'u.phone','r.user_id','rl.all_roles')->get();
           // ->get(); //user_id is the doctor id
    }/*
    public function doctor_info(){
        $id=Auth::user()->id;
        return    DB::table('users as u')
            ->join('UsersGenInfo_of_SubMasterDr as ugi','ugi.user_id','=','u.id')
            ->join('general_infos as gi','gi.id','=','ugi.general_info_id')
            ->where('u.id','=',$id)
            ->select("u.name","u.surname","u.usr_name","u.email","u.phone","ugi.user_id",
                "gi.city","gi.country","gi.adress_1","gi.adress_2","gi.gender","gi.date_of_birth","gi.department","gi.position",
                "gi.specility","gi.priority","gi.status","gi.postal_zip","gi.blood_group","gi.expr_year","gi.degree","gi.awards_count")
            ->get();
    }*/

    /*------------------------------------------------------------------------------*/

    public function doctors_list(){
        $datas=$this->all_doctors();
        //$datas=User::all();
       /* $data=array();
        foreach ($datas as $dr){
            $data[]=array(
                'name'=>$dr['name'],
                'surname'=>$dr['surname']
            );
        } */
        echo json_encode($datas,true);
    }
    public function search_a_doctor_autocomplete(){
        $search = $_GET['term'];

        $skillData = array();
       // $dta= User::where("name",'like','%'.$search.'%')->get();
        $dta= $this->all_doctors($search);
       /*  $data[]=array(
           "id"=>$dta[0]->id,
           "value"=>$dta[0]->name,
         ); */
         foreach ($dta as $datas){
              $data['id']=$datas->id;
              $data['value']=$datas->name;//when it is requesting the name

              $data['name']=$datas->name;
              $data['surname']=$datas->surname;
             // $data['email']=$datas->email;
              $data['phone']=$datas->phone;

              $name_surname=  $datas->name." ".$datas->surname."<br>".$datas->phone; //the autocomplete format
              $data['label']=$name_surname;

            /* if we want an autocomplete with a picture  */
            /* $data['label'] = '
           <a class="bg-white border-white text-capitalize text-info font-weight-bold text-black-50 ">
           <img src="/css_js_img/media-1771205195e049ca8ee997.jpg" class="img-thumbnail" width="60" height="60"/>
            <span class="" />'.$name_surname.'</span> </a>
        '; */

            array_push($skillData, $data);
        }

        echo json_encode($skillData);
    }
    public function index(){
        return "working";
    }

    public function list_dr(){

      if(Auth::user()->the_role()=="Doktor(Master)"){
          $info_dr= Auth::user()->all_doctors_of_sub_master_doctor(); //$this->all_doctors();
      }elseif(Auth::user()->the_role()=="Doktor"){
          $info_dr= Auth::user()->doctor_self_info;//$this->doctor_info();
      }
        return view('pages.Doctors',compact('info_dr'));
    }
    public function doctor_add(){ // create a doctor page
        return view('pages.Doctor_Add');
    }
    public function edit_doctor($dr_id){

      if(Auth::user()->the_role()=="Doktor") {
          $the_doctor = Auth::user()->doctor_self_info->first(); //$this->all_doctors()->where('user_id',$dr_id);

      }elseif(Auth::user()->the_role()=="Doktor(Master)"){
          $the_doctor = Auth::user()->all_doctors_of_sub_master_doctor()->where('user_id',$dr_id)->first(); //$this->all_doctors()->where('user_id',$dr_id);
      }

        $doctor_apt_time=array();
      for ($i=1;$i<=7;$i++){
         $doctor_apt_time[]= DoctorApt_Time::where(["doctor_id"=>$dr_id,"day"=>$i])->first();
      }
      //return $doctor_apt_time;
      return view('pages.Doctor_Edit',compact('the_doctor',"doctor_apt_time"));
    }
    function update_doctor_info(Request $request){
        $doctor_id=$request->dr_id;
        User::where(['id'=>$doctor_id])->update([
            "name"=>$request->name,
            "surname"=>$request->surname,
           // "email"=>$request->email,
            "usr_name"=>$request->user_name,
        ]);

        $usr_inf= DB::table('UsersGenInfo_of_SubMasterDr')->where('user_id',$doctor_id)->get();
        General_Infos::where(['id'=>$usr_inf[0]->general_info_id])->update([
            "blood_group" => $request-> blood_group,
            "gender" => $request-> gender,
            "adress_1" => $request-> adress1,
            "adress_2" => $request-> adress2,
            "city" => $request-> city,
            "country" => $request-> country,
            "postal_zip" => $request-> posta_zip_kodu,
            "status" => $request-> web_status,
            "priority" => $request-> priority,
            "position" => $request-> position,
            "department" => $request-> department,
            "degree" => $request-> degree,
            "specility" => $request-> specility,
            "expr_year" => $request-> experience,
            "awards_count" => $request-> awards,
            "date_of_birth" => $request->date_of_birth,
            "status" => $request->status,
        ]);
        Info_Details::where('general_infos_id',$usr_inf[0]->general_info_id)->update([ //general info's details part
            "facebook_link" => $request-> facebook_link,
            "twitter_link" => $request-> twitter_link,
            "instegram_link" => $request-> instagram_link,
        ]);
        for($i=1;$i<=7;$i++){
            if(!empty($request->appointment_dr['time'][$i]["holiday"])){
                $holiday=1;
            }else{
                $holiday=0;
            }
            DoctorApt_Time::where(["doctor_id"=>$request->dr_id,"day"=>$i])->update([
                "bfr_lunch_begin"=>$request->appointment_dr['time'][$i]["before_lunch_begin"],
                "bfr_lunch_end"=>$request->appointment_dr['time'][$i]["before_lunch_end"],
                "aftr_lunch_begin"=>$request->appointment_dr['time'][$i]["after_lunch_begin"],
                "aftr_lunch_end"=>$request->appointment_dr['time'][$i]["after_lunch_end"],
                "range_time"=>$request->appointment_dr['time'][$i]["slot_time"],
                "holiday"=>$holiday,
            ]);
        }

    return redirect()->back();
    }

    public function create_doctor(Request $request){
        $masterDR_id=Auth::user()->id;
       $user= User::create([ // person of dr,resepsiyonist etc..
           "name" => $request->name ,
           "surname" => $request-> surname,
           "email" => $request-> mail,
           "usr_name" => $request-> user_name,
           "password" => Hash::make($request-> password),
           "phone" => $request-> phone,
        ]);

       for($i=1;$i<=7;$i++) {
           DoctorApt_Time::create([
               'doctor_id' => $user->id,
               'day' => $i,
           ]);
       }
       $general_infos_id= General_Infos::create([ // the general info table

            "blood_group" => $request-> blood_group,
            "gender" => $request-> gender,
            "adress_1" => $request-> adress1,
            "adress_2" => $request-> adress2,
            "city" => $request-> city,
            "country" => $request-> country,
            "postal_zip" => $request-> posta_zip_kodu,
            "status" => $request-> web_status,
            "priority" => $request-> priority,
            "position" => $request-> position,
            "department" => $request-> department,
            "degree" => $request-> degree,
            "specility" => $request-> specility,
            "expr_year" => $request-> experience,
            "awards_count" => $request-> awards,
           "date_of_birth" => $request->date_of_birth,
           "status" => $request->status,
        ]);

       Info_Details::create([ //general info's details part
            "facebook_link" => $request-> facebook_link,
            "twitter_link" => $request-> twitter_link,
            "instegram_link" => $request-> instegram_link,
            'general_infos_id'=>$general_infos_id->id,
        ]);
        /*---------relationships weak entities---------*/
        $find_table_of_masterDR_and_clinics_id= DB::table('masterDr_and_Clinics')->where(['master_dr_id'=>$masterDR_id])->get();
        $the_table_of_masterDR_and_clinics_id="";
        foreach ( $find_table_of_masterDR_and_clinics_id as  $item ) {
            $the_table_of_masterDR_and_clinics_id=$item->id;
        }
        DB::table('UsersGenInfo_of_SubMasterDr')->insert([
            'user_id'=>$user->id,
            'masterDr_and_clinic_id'=>$the_table_of_masterDR_and_clinics_id,
            'general_info_id'=> $general_infos_id->id
        ]);
        DB::table('role_user')->insert(['role_id'=>3,'user_id'=>$user->id]);
        /*---------End relationships weak entities---------*/
        return redirect()->to('/Doctors');
    }

    function delete_doctor($dr_id){

       $info= UsersGenInfo_of_SubMasterDoctor::where("user_id",$dr_id)->first();

       Info_Details::where("general_infos_id",$info->general_info_id)->delete();
       General_Infos::where("id",$info->general_info_id)->delete();
       UsersGenInfo_of_SubMasterDoctor::where("user_id",$dr_id)->delete();

       $apt=Appointments::where("doctors_id",$dr_id)->first();

       Clinic_Problems::where("apt_problmes_id",$apt->id)->delete();
       Clinic_Diagnosis::where("apt_diagnoses_id",$apt->id)->delete();
       Clinic_Investigations::where("apt_investigations_id",$apt->id)->delete();
       Clinic_Observations::where("apt_observations_id",$apt->id)->delete();
       clinicNotes_advices::where("apt_notes_adv_id",$apt->id)->delete();
       Appointments::where("doctors_id",$dr_id)->delete();
       Prescriptions::where("apt_id",$apt->id)->delete();
       DoctorApt_Time::where("doctor_id",$dr_id)->delete();
       User::where("id",$dr_id)->delete();
       DB::table("role_user")->where(["user_id"=>$dr_id])->delete();

       return redirect()->back()->with("success","Silme İşlemi Tamamlandı.");




    }
}
