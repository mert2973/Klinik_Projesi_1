<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\Clinic_Diagnosis;
use App\Clinic_Investigations;
use App\Clinic_Observations;
use App\Clinic_Problems;
use App\clinicNotes_advices;
use App\DoctorApt_Time;
use App\events;
use App\Prescriptions;
use App\Teeth_Process;
use Carbon\Carbon;
use http\Header;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class Appointment extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Doctor $d)
    {
         $list_doctors=  $d->all_doctors();
         //return  $list_appointment=  Appointments::with('appointments')->paginate(4);
         $list_appointment = Auth::user()->appointments()->paginate(5);
         return  view('pages.Appointments',compact('list_doctors','list_appointment'));
    }
    public function doctor_apt_time(){
      $dr_id=$_GET['the_dr_id'];
      $day=$_GET['day'];

      //$data=array();
      $datas=  DoctorApt_Time::where(["doctor_id"=>$dr_id,"day"=>$day])->first();

        $times=array();

        $bf=Carbon::parse($datas->bfr_lunch_begin)->format("H:i");
        $nx=Carbon::parse($datas->bfr_lunch_end)->format("H:i");

        while($bf<$nx){
            $times[]=$bf;

            $bf= Carbon::parse($bf);
            $bf= $bf->addMinute($datas->range_time)->format("H:i");
           if($bf>$nx){
               break;
           }
        }

        $bf2=Carbon::parse($datas->aftr_lunch_begin)->format("H:i");
        $nx2=Carbon::parse($datas->aftr_lunch_end)->format("H:i");
        while($bf2<$nx2){
            $times[]=$bf2;

            $bf2= Carbon::parse($bf2);
            $bf2= $bf2->addMinute($datas->range_time)->format("H:i");
            if($bf2>$nx2){
                break;
            }
        }
        $find_holiday=  DoctorApt_Time::where(["doctor_id"=>$dr_id])->get();
        foreach ($find_holiday as $k){
          if($k->holiday==1){
            $times[]=array(
                "holiday"=>$k["day"],
            );
          }
        }

           //    $data["bfr_lunch_begin"]=$times;//$datas->bfr_lunch_begin,
     echo json_encode($times);
    }
    public function show_events(){
    // $datas=  events::all();
      $datas=Auth::user()->appointments()->get();
      $data=array();
      foreach ($datas as $items){
          $data[]=array(
            'apt_id'=>$items['id'],
            'doctor_id'=>$items['doctors_id'],
            'patient_id'=>$items['patient_id'],
            'start'=>$items['apt_date'],
            'end'=>$items['apt_date_end'],
            'time'=>Carbon::parse($items['apt_time'])->format("H:i"),
            'status'=>$items['apt_status'],
            'reason'=>$items['apt_reason'],
            'title'=>$items['p_name']." ".$items['p_surname'] ,
            'p_name'=>$items['p_name'],
            'p_surname'=>$items['p_surname'],
            'email'=>$items['p_email'],
            'mobile'=>$items['p_phone'],
            'doctor'=>$items['name']." ".$items['surname'],
          );
      }
      echo  json_encode($data);
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
        $the_apt_date= ($request->apt_date." ".$request->apt_time);
        $date= Carbon::parse($the_apt_date)->format('Y-m-d H:i:s');

        $now=Carbon::now();
       if($date>=$now){

           $date0= Carbon::parse($date);
           $date_end1=$date0->addHour(1);

           $p_id= $request->patient_id;
           $d_id= $request->doctor;

           if($p_id!=null && $d_id!=null){
               if($request->apt_time==null ){
                   return redirect()->back()->with("warning","Saat bilgisi alınamadı. Lütfen tekrar deneyiniz!");
               }
               if($request->apt_date==null ){
                   return redirect()->back()->with("warning","Tarih bilgisi alınamadı. Lütfen tekrar deneyiniz!");
               }

               $chk_if_exist=  Appointments::where(['patients_id'=>$p_id,'doctors_id'=>$d_id])->where('apt_date',"=",$date)->first();
               if($chk_if_exist==null){
                        Appointments::create([
                       'patients_id' => $p_id,
                       'doctors_id' => $d_id,
                       'apt_date' => $date,
                       'apt_date_end' => $date_end1,
                       'apt_time' => $request->apt_time,
                       'apt_status' => $request->apt_status,
                   ]);

                    return  redirect()->back()->with('success','Randevu Kaydı Başarıyla Yapılmıştır');
               }else{
                    return redirect()->back()->with('warning','Bu Hasta İçin, Aynı Tarihte Zaten Bir Randevu Kaydı Açılmıştır. ');
               }
           }else{
                 return redirect()->back()->with('warning', 'Lütfen Geçerli Bir Hasta Adı Seçiniz.');
           }
       }else{

           return redirect()->back()->with('warning','Geçmiş Bir Tarih İçin Randevu Alınamaz.');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($apt_id)
    {
        if($apt_id!=null){
            $doctor_with_his_her_patient= Auth::user()->doctor_with_his_patients();
            $dr_with_ptn= $doctor_with_his_her_patient->where('id',$apt_id)->first();

            $problems = Clinic_Problems::where('apt_problmes_id', $dr_with_ptn->id)->pluck('problems', 'id')->toArray();
            $observations = Clinic_Observations::where('apt_observations_id', $dr_with_ptn->id)->pluck('observations', 'id')->toArray();
            $diagnosis = Clinic_Diagnosis::where('apt_diagnoses_id', $dr_with_ptn->id)->pluck('diagnoses', 'id')->toArray();
            $investigations = Clinic_Investigations::where('apt_investigations_id', $dr_with_ptn->id)->pluck('investigations', 'id')->toArray();
            $notes_advices = clinicNotes_advices::where('apt_notes_adv_id', $dr_with_ptn->id)->pluck('notes_advices', 'id')->toArray();
            $prescriptions=Prescriptions::where("apt_id",$apt_id)->get();
           // $teeth_processes=Teeth_Process::where("apt_id",$apt_id)->get();

            if($dr_with_ptn!=null){
                $date= Carbon::parse($dr_with_ptn->apt_date)->format("d/m/Y H:m");
                return view('pages.Appointment_View',compact('dr_with_ptn',"date","problems","observations","diagnosis","investigations","investigations","notes_advices","prescriptions"));
            }else{
                echo "Kayıt incelemesi için doktor veya hasta kaydı bulunamadı. Yönlendiriliyorsunuz...";
                return header('refresh:3;url=/Appointments');
            }

        }else{
            echo "Hatalı URL Girişi yapıldı. Yönlendiriliyorsunuz...";
            return  header('refresh:2;url=/Appointments');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($apt_id,Doctor $dr)
    {
        //return $apt_id;

        //Auth::user()->doctor_with_his_patients();
        if($apt_id!=null){

            $all_doctors= $dr->all_doctors();

              $doctor_with_his_her_patients= Auth::user()->doctor_with_his_patients(); // at Appointment
              $dr_with_patient= $doctor_with_his_her_patients->where('id',$apt_id)->first();

                if($dr_with_patient!=null) {
                    $problems = Clinic_Problems::where('apt_problmes_id', $dr_with_patient->id)->pluck('problems', 'id')->toArray();
                    $observations = Clinic_Observations::where('apt_observations_id', $dr_with_patient->id)->pluck('observations', 'id')->toArray();
                    $diagnosis = Clinic_Diagnosis::where('apt_diagnoses_id', $dr_with_patient->id)->pluck('diagnoses', 'id')->toArray();
                    $investigations = Clinic_Investigations::where('apt_investigations_id', $dr_with_patient->id)->pluck('investigations', 'id')->toArray();
                    $notes_advices = clinicNotes_advices::where('apt_notes_adv_id', $dr_with_patient->id)->pluck('notes_advices', 'id')->toArray();
                    $prescriptions=Prescriptions::where("apt_id",$apt_id)->get();
                    $teeth_processes=Teeth_Process::where("apt_id",$apt_id)->get();

                    $doctor_id = $dr_with_patient->doctors_id;
                    if ( $dr_with_patient == null ) {
                        echo "Düzenleme için doktor veya hasta kaydı bulunamadı. Yönlendiriliyorsunuz...";
                        return header('refresh:3;url=/Appointments');
                    } else {
                        $dt = $dr_with_patient->apt_date;
                        $date = Carbon::parse($dt)->format('d-m-Y');
                        return view('pages.Appointment_Edit',
                            compact('all_doctors', 'doctor_id', 'dr_with_patient', 'problems', 'observations', 'diagnosis',
                                'investigations', 'notes_advices',"prescriptions","teeth_processes",'date'));
                    }
                }else{
                    return redirect()->back()->with("warning","Kayıt Bulunamadı");
                }
        }else{
            echo "Hatalı URL Girişi Yapıldı.Yönlendiriliyorsunuz...";
            return header('refresh:2;url=/Appointments');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $apt_id){
       // return $request->all();

        // $apt_url= url("")."/Appointments";    //http://klinik.com:8080
        //return url()->previous();
        //$q_url=url()->previous();//http://klinik.com:8080/Dashboard
        $Appointments_dr_ptn_success=0;
        $Appointments_cahanges_success=0;

        $now= Carbon::now();
        $the_apt_date= ($request->apt_date." ".$request->apt_time);

        $date=Carbon::parse($the_apt_date)->format("Y-m-d H:i:s");// change the format as the db format
        if($date>=$now){

          //  $date=Carbon::parse($the_apt_date)->format("Y-m-d H:i:s");// change the format as the db format
            $date_e= Carbon::parse($the_apt_date);
            $date_end=$date_e->addHour(1); // slot time

            $new_doctor_id=$request->doctor;//it may new doctor or the exist doctor
            $previous_doctor_id=$request->prev_doctor;//it may previous doctor or the exist doctor

            if($apt_id!=null && $new_doctor_id!=null && $previous_doctor_id!=null) {
                if($request->apt_time==null ){
                    return redirect()->back()->with("warning","Saat bilgisi alınamadı");
                }
                if($request->apt_date==null ){
                    return redirect()->back()->with("warning","Tarih bilgisi alınamadı");
                }

                if($new_doctor_id==$previous_doctor_id  && $request->apt_date==$request->prev_date && $request->prev_time==$request->apt_time ){
                    Appointments::where(['id'=>$apt_id])->update([
                        // 'doctors_id' => $new_doctor_id,
                        //'apt_date' => $date,
                        //'apt_date_end' => $date_end,
                        //'apt_time' => $request->apt_time,
                        'apt_status' => $request->apt_status,
                        'apt_reason' => $request->apt_rsn,
                    ]);
                        $Appointments_cahanges_success=1;

                }
                $chk_if_exist = Appointments::where(['doctors_id' => $new_doctor_id, 'patients_id' => $request->patient_id])->where("apt_date","=",$date)->first();
                // return $chk_if_exist = Appointments::where(['apt_date'=>$date])->first();
                if ( $chk_if_exist == null ) { //if not exist same patient infos at another doctor page
                    Appointments::where(['id'=>$apt_id])->update([//, 'patients_id' => $patient_id, 'doctors_id' => $previous_doctor_id
                        'doctors_id' => $new_doctor_id,
                        'apt_date' => $date,
                        'apt_date_end' => $date_end,
                        'apt_time' => $request->apt_time,
                        'apt_status' => $request->apt_status,
                        'apt_reason' => $request->apt_rsn,
                    ]);
                    $Appointments_dr_ptn_success=1;
                    if(Auth::user()->the_role()!="Doktor(Master)"){
                       if($new_doctor_id!=$previous_doctor_id ){
                            if(url("")."/Dashboard"!=url()->previous())
                            return redirect()->to("Appointments")->with("success","Doktor değişikliğine gidildiği için; Randevu anasayfasına yönlendirildiniz!");
                       }
                    }
                }



                /*****clinic problems ******/
                    $the_clinic_problems = Clinic_Problems::where(['apt_problmes_id'=>$apt_id])->get();
                        $data_prob=array();
                        if(!empty($request->problems)) {
                            foreach ( $request->problems as $prob_id => $val ) {
                                // return "id:".$prob_id." Problem:".$val;
                                $data_prob[] = $prob_id;// collect all items(problems) at data array
                            }
                        }
                        if($the_clinic_problems!=null){
                            foreach ($the_clinic_problems as $item_prob){// search the db data at  items, if not match just delete it
                                if(in_array($item_prob->id,$data_prob)==false){// false=if data removed from web
                                    Clinic_Problems::where('id',$item_prob->id)->delete();
                                }
                            }
                        }

                   if( !empty($request->notes['notes']['problem'])) { //if there is a new data then create it at db
                       foreach ( $request->notes[ 'notes' ][ 'problem' ] as $val ) {
                           Clinic_Problems::create([
                               'apt_problmes_id' => $apt_id, //appointments_id
                               'problems' => $val,
                           ]);
                       }
                   }
                 /*****End clinic problems ******/

                 /*****End clinic observations ******/
                    $the_clinic_observations = Clinic_Observations::where(['apt_observations_id'=>$apt_id])->get();
                    $data_obs=array();
                    if(!empty($request->observations)) {
                        foreach ( $request->observations as $obs_id => $val_obs ) {
                            // return "id:".$prob_id." Problem:".$val;
                            $data_obs[] = $obs_id;// collect all request items(problems) at data array
                        }
                    }
                    if($the_clinic_observations!=null){
                        foreach ( $the_clinic_observations as $item_obs ) {// search the db data at request items, if not match just delete it
                            if ( in_array($item_obs->id, $data_obs) == false ) {
                                Clinic_Observations::where('id', $item_obs->id)->delete();
                            }
                        }
                    }

                    if(!empty($request->notes['notes']['observation'])) { //if there is a data create it at db
                        foreach ( $request->notes['notes'][ 'observation'] as $val_obs ) {
                            Clinic_Observations::create([
                                'apt_observations_id' => $apt_id, // appointments_id
                                'observations' => $val_obs,
                            ]);
                        }
                    }

                 /*****End clinic observations ******/

                 /*****End clinic diagnosis(teşhis) ******/
                    $the_clinic_diagnosis = Clinic_Diagnosis::where(['apt_diagnoses_id'=>$apt_id])->get();
                    $data_diag=array();
                    if(!empty($request->diagnosis)) {
                        foreach ( $request->diagnosis as $diag_id => $val_diag ) {
                            // return "id:".$prob_id." Problem:".$val;
                            $data_diag[] = $diag_id;// collect all request items(problems) at data array
                        }
                    }
                    if($the_clinic_diagnosis!=null){
                        foreach ( $the_clinic_diagnosis as $item_diag ) {// search the data at request items, if not match just delete it from db
                            if ( in_array($item_diag->id, $data_diag) == false ) {
                                Clinic_Diagnosis::where('id', $item_diag->id)->delete();
                            }
                        }
                    }
                    if(!empty($request->notes['notes']['diagnosis'])) { //if there is a  new data then create it at db
                        foreach ( $request->notes['notes'][ 'diagnosis'] as $val_diag ) {
                            Clinic_Diagnosis::create([
                                'apt_diagnoses_id' => $apt_id, //appointments_id
                                'diagnoses' => $val_diag,
                            ]);
                        }
                    }

                 /*****End clinic diagnosis(araştırma) ******/

                    /***** clinic investigations ******/
                    $the_clinic_investigations = Clinic_Investigations::where(['apt_investigations_id'=>$apt_id])->get();
                    $data_invt=array();
                    if(!empty($request->investigations)){
                        foreach ($request->investigations as $invt_id=>$val_invt){
                            // return "id:".$prob_id." Problem:".$val;
                            $data_invt[]=$invt_id;// collect all request items(problems) at data array
                        }
                    }
                    if($the_clinic_investigations!=null){
                        foreach ($the_clinic_investigations as $item_invt){// search the db data at request items, if not match just delete it
                            if(in_array($item_invt->id,$data_invt)==false){
                                Clinic_Investigations::where('id',$item_invt->id)->delete();
                            }
                        }
                    }
                    if(!empty($request->notes['notes']['investigation'])) { //if there is a new data just create it at db
                        foreach ( $request->notes['notes'][ 'investigation'] as $val_invt ) {
                            Clinic_Investigations::create([
                                'apt_investigations_id' => $apt_id,// appointments_id
                                'investigations' => $val_invt,
                            ]);
                        }
                    }
                    /*****End clinic investigations ******/

                    /***** clinic notes advices ******/
                    $the_clinic_note_advices = clinicNotes_advices::where(['apt_notes_adv_id'=>$apt_id])->get();
                    $data_note=array();
                    if(!empty($request->notes_advices)){
                        foreach ($request->notes_advices as $note_id=>$val_note){
                            // return "id:".$prob_id." Problem:".$val;
                            $data_note[]=$note_id;// collect all request items(problems) at data array
                        }
                    }
                    if($the_clinic_note_advices!=null){
                        foreach ($the_clinic_note_advices as $item_note){// search the db data at request items, if not match just delete it
                            if(in_array($item_note->id,$data_note)==false){
                                clinicNotes_advices::where('id',$item_note->id)->delete();
                            }
                        }
                    }
                    if(!empty($request->notes['notes']['notes'])) { //if there is a data create it at db
                        foreach ( $request->notes['notes']['notes'] as $val_note ) {
                            clinicNotes_advices::create([
                                'apt_notes_adv_id' => $apt_id, // appointments_id
                                'notes_advices' => $val_note,
                            ]);
                        }
                    }

                    /*****End clinic notes advices ******/

                /****Teeth Processes *****/
                $teeth_arr=array();
                if(!empty($request->tooth_record)){
                    foreach ($request->tooth_record as $tt){
                        Teeth_Process::where("id",$tt["id"])->update([
                            "prc_name"=>$tt["name"],
                            "piece"=>$tt["piece"],
                            "exp_prc"=>$tt["exp"],
                            "teeth_num"=>$tt["tooth"],
                        ]);
                        $teeth_arr[]=$tt["id"]; //set at array all exist ids which at web side
                    }
                }
                $teeth_data= Teeth_Process::where("apt_id",$apt_id)->get();
                if($teeth_data!=null){ // if exist data at db
                    foreach ($teeth_data as $dd){
                        if(in_array($dd->id,$teeth_arr)==false){
                            Teeth_Process::where("id",$dd->id)->delete();
                        }
                    }
                }

                if(!empty($request->teeth["tooth"])){
                    foreach ( $request->teeth["tooth"] as $value){
                        Teeth_Process::create([
                            "apt_id"=>$apt_id,
                            "prc_name"=>$value["name"],
                            "piece"=>$value["piece"],
                            "exp_prc"=>$value["exp"],
                            "teeth_num"=>$value["tooth"],

                        ]);
                    }
                }
                /****End. Teeth Processes *****/

                /**** Prescripton *****/
                $pres_arr=array();
                if(!empty($request->pres)){
                    foreach ($request->pres as $tt){
                        Prescriptions::where("id",$tt["id"])->update([
                            "mdc_name"=>$tt["name"],
                            "mdc_generic"=>$tt["generic"],
                            "mdc_dose"=>$tt["dose"],
                            "mdc_duration"=>$tt["duration"],
                            "mdc_instruction"=>$tt["instruction"],
                        ]);
                        $pres_arr[]=$tt["id"]; //set at array all exist ids which at web side
                    }
                }
                $pres_data= Prescriptions::where("apt_id",$apt_id)->get();
                if($pres_data!=null){ // if exist data at db
                    foreach ($pres_data as $dd){
                        if(in_array($dd->id,$pres_arr)==false){
                            Prescriptions::where("id",$dd->id)->delete();
                        }
                    }
                }
                if(!empty($request->prescription["medicine"])){
                    foreach ( $request->prescription["medicine"] as $value){
                        Prescriptions::create([
                            "apt_id"=>$apt_id,
                            "mdc_name"=>$value["name"],
                            "mdc_generic"=>$value["generic"],
                            "mdc_dose"=>$value["dose"],
                            "mdc_duration"=>$value["duration"],
                            "mdc_instruction"=>$value["instruction"],
                        ]);
                    }
                }
                /****End. Prescripton *****/

                if($Appointments_cahanges_success==1){
                    return redirect()->back()->with("success","Değişiklikler Kaydedildi");
                }elseif( $Appointments_dr_ptn_success==1){
                    return redirect()->back()->with("success","Randevu ile ilgili değişiklikler başarıyla kaydedilmiştir!");
                }else{
                   return redirect()->back()->with("warning","Belirtilen hasta için randevu tarihi daha önce alınmıştır!");
                }
            }else{
                return redirect()->back()->with("warning","Kayıt düzenlemesi için gerekli bilgiler alınamadı.");
            }


      }else{
            return redirect()->back()->with("warning","Geçmiş bir tarih için randevu işlemleri yapılamaz.");
           }
       // return  $request->prescription['medicine'][0]['name'];
    //return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointments::where('id',$id)->delete();
        Clinic_Problems::where('apt_problmes_id',$id)->delete();
        Clinic_Investigations::where('apt_investigations_id',$id)->delete();
        Clinic_Diagnosis::where('apt_diagnoses_id',$id)->delete();
        Clinic_Observations::where('apt_observations_id',$id)->delete();
        clinicNotes_advices::where('apt_notes_adv_id',$id)->delete();

        return redirect()->back()->with("success","Randevu kayıt Silme İşlemi Başarıyla Tamamlandı");
    }
}
