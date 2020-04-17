<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\Clinic_Diagnosis;
use App\Clinic_Investigations;
use App\Clinic_Observations;
use App\Clinic_Problems;
use App\clinicNotes_advices;
use App\Patient_Infos;
use App\Prescriptions;
use Illuminate\Http\Request;
use App\Patients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\fromJSON;


class Patient extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
     // $this->middleware('Yetkili_Doktor');
    }

    public function autoComplete_patients(Patients $pt){

        $clinic_id= Auth::user()->the_clinic_id();
        $search = $_GET['term'];

        $skillData = array();
        $dta= Patients::where('p_name','like','%'.$search.'%')->where('clinic_id',$clinic_id)->get();
        foreach ($dta as $datas){
            $data['id']=$datas['id'];
            $data['value']=$datas['p_name'];//when it is requesting the name

            $data['name']=$datas['p_name'];
            $data['surname']=$datas['p_surname'];
            $data['email']=$datas['p_email'];
            $data['phone']=$datas['p_phone'];

            $name_surname=  $datas['p_name']." ".$datas['p_surname']."<br>".$datas['p_phone']; //the autocomplete format
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index( Patients $a)
    {
        $clinic_id=Auth::user()->the_clinic_id();
       //return $the_patients= $a->all_patients_list();

       /* patients who belong to the clinic */
       $the_patients= Patients::with('all_patients_list')->where('patients.clinic_id',$clinic_id)->paginate(5);
       // $the_patients = Auth::user()->patients_list(); // patients of the belong to DR

       return view('pages.Patient',compact('the_patients'));
    }


    public function find_the_patient(){
        $patient_id=$_GET['id'];
        return $patient_id;
    }

    public function patient_add_page(){
        return view('pages.Patient_Add');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clinic_id=Auth::user()->the_clinic_id();

        $user_id=Auth::user()->id;
        $patients_id=Patients::create([
            'who_add_patient'=>$user_id, // who add the patient to the system
            'clinic_id'=>$clinic_id,
            'p_name'=>$request->name,
            'p_surname'=>$request->surname,
            'p_email'=>$request->email,
            'p_phone'=>$request->phone,
        ]);
        //city','country','adress_1','adress_2','gender','date_of_birth','postal_zip','blood_group
       $patient_infos_id= Patient_Infos::create([
           'patient_id'=>$patients_id->id,
            'city'=>$request-> city,
            'country'=>$request-> country,
            'adress_1'=>$request-> adres_1,
            'adress_2'=>$request-> adres_2,
            'gender'=>$request-> gender,
            'date_of_birth'=>$request-> date_birth,
            'postal_zip'=>$request-> posta_kodu,
            'blood_group'=>$request-> blood_group,

        ]);
       /*--weak entity relationship--*/
       // DB::table('patient_and_patient_infos')->insert(['patients_id'=>$patients_id->id,'patient_infos_id'=>$patient_infos_id->id]);
       return redirect()->to('/Patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Doctor $dr)//Patient_View
    {
        $list_doctors= $dr->all_doctors();

      // $the_patient_infos= Auth::user()->patients_list()->where('patients_id',$id);
         $the_patient_infos= Patients::with('all_patients_list')->where('id',$id)->get();

         $list_appointment0 = Auth::user()->appointments()->where("patients_id",$id);
         /* Appointment table*/
         $list_appointment=$list_appointment0->paginate(10);
        /*End. Appointment table*/
         /**** clinic notes****/

          $list_appointment2 = $list_appointment0->get();
          $list_appointment_grpDR_id= $list_appointment2->GroupBy("doctors_id");
        /****End. clinic notes****/

        $problems=array(); $observations=array(); $diagnosis=array(); $investigations=array(); $notes_advices=array();
        $prescriptions=array();
        foreach ($list_appointment2 as $apt_idd) {
            $problems[] = Clinic_Problems::where('apt_problmes_id', $apt_idd->id)->get();
            $observations[] = Clinic_Observations::where('apt_observations_id', $apt_idd->id)->get();
            $diagnosis[] = Clinic_Diagnosis::where('apt_diagnoses_id', $apt_idd->id)->get();
            $investigations[] = Clinic_Investigations::where('apt_investigations_id', $apt_idd->id)->get();
            $notes_advices[] = clinicNotes_advices::where('apt_notes_adv_id', $apt_idd->id)->get();
            $prescriptions[]=Prescriptions::where("apt_id",$apt_idd->id)->get();
        }

       // return  $prescriptions;
        return view('pages.Patient_View',compact('the_patient_infos','list_appointment',"list_doctors",
                       'list_appointment2',"list_appointment_grpDR_id"))
            ->with(["problems"=>$problems,"observations"=>$observations,"diagnosis"=>$diagnosis,"investigations"=>$investigations,"notes_advices"=>$notes_advices,"prescriptions"=>$prescriptions]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient_info= Patients::with('all_patients_list')->where('id',$id)->first();
        return view('pages.Patient_Edit',compact('patient_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //return $request->all();
        Patients::where('id',$id)->update([
           'p_name'=>$request->name,
           'p_surname'=>$request->surname,
           'p_email'=>$request->mail,
           'p_phone'=>$request->phone,
           'status'=>$request->status,
        ]);

        Patient_Infos::where('patient_id',$id)->update([
            'city'=>$request->city,
            'country'=>$request->country,
            'adress_1'=>$request->adress1,
            'adress_2'=>$request->address2,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'postal_zip'=>$request->posta_zip,
            'blood_group'=>$request->bloodgroup,
        ]);

        return redirect()->back()->with("success","Değiklikler Başarıyla Sisteme Kaydedildi!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $apt=Appointments::where("patients_id",$id)->get();
       foreach ($apt as $del_id){
           Clinic_Problems::where("apt_problmes_id",$del_id->id)->delete();
           clinicNotes_advices::where("apt_notes_adv_id",$del_id->id)->delete();
           Clinic_Observations::where("apt_observations_id",$del_id->id)->delete();
           Clinic_Investigations::where("apt_investigations_id",$del_id->id)->delete();
           Clinic_Diagnosis::where("apt_diagnoses_id",$del_id->id)->delete();
       }
        Appointments::where("patients_id",$id)->delete();

       Patient_Infos::where("patient_id",$id)->delete();
       Patients::where("id",$id)->delete();
       return redirect()->back()->with("success","Belirtilen hasta bilgileri sistemden silinmiştir");

    }
}
