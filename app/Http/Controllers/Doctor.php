<?php

namespace App\Http\Controllers;

use App\General_Infos;
use App\Info_Details;
use App\User;
use App\User_General_Infos;
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

      /*  public function all_doctors(){
        //return User::all()->toArray();
            return    DB::table('users as u')
            ->join('role_user as r','r.user_id','=','u.id')
            ->join('roles as rl','rl.id','=','r.role_id')
            ->join('UsersGenInfo_of_SubMasterDr as ugi','ugi.user_id','=','u.id')
            ->join('general_infos as gi','gi.id','=','ugi.general_info_id')
            ->join("info_details as idt",'idt.general_infos_id','=','ugi.general_info_id')
            ->where('rl.all_roles','Doktor')
            ->select('u.name','u.surname','u.usr_name','gi.gender','gi.status','gi.department','gi.adress_1','gi.adress_1',
                'gi.blood_group','gi.date_of_birth','gi.city','gi.country','gi.postal_zip','gi.specility','gi.priority','gi.expr_year','gi.degree',
                'gi.awards_count','gi.adress_2','gi.position','idt.facebook_link','idt.instegram_link','idt.twitter_link',
                'u.email','u.phone','r.user_id','rl.all_roles','rl.role_description')->paginate(4);
           // ->get(); //user_id is the doctor id
    }
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
    }
*/
    /*------------------------------------------------------------------------------*/

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
    public function doctor_add(){
        return view('pages.Doctor_Add');
    }
    public function doctor_edit($dr_id){

      if(Auth::user()->the_role()=="Doktor") {
          $thee_doctor = Auth::user()->doctor_self_info; //$this->all_doctors()->where('user_id',$dr_id);
          foreach ( $thee_doctor as $a ) {
              $the_doctor = $a;
          }
      }elseif(Auth::user()->the_role()=="Doktor(Master)"){
          $thee_doctor = Auth::user()->all_doctors_of_sub_master_doctor()->where('user_id',$dr_id); //$this->all_doctors()->where('user_id',$dr_id);
          foreach ( $thee_doctor as $a ) {
              $the_doctor = $a;
          }
      }
        return view('pages.Doctor_Edit',compact('the_doctor'));
    }
    function doctor_info_update(Request $request){
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
        // $request->appointment_status;

    return redirect()->back();

    }
    public function doctor_create(Request $request){
        $masterDR_id=Auth::user()->id;
       $user= User::create([ // person of dr,resepsiyonist etc..
           "name" => $request->name ,
           "surname" => $request-> surname,
           "email" => $request-> mail,
           "usr_name" => $request-> user_name,
           "password" => Hash::make($request-> password),
           "phone" => $request-> phone,
        ]);


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
}
