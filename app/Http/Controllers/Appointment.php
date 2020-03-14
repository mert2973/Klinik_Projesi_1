<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\Clinic_Diagnosis;
use App\Clinic_Investigations;
use App\Clinic_Observations;
use App\Clinic_Problems;
use App\clinicNotes_advices;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
         $list_appointment = Auth::user()->appointments();
        return  view('pages.Appointments',compact('list_doctors','list_appointment'));
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
       $p_id= $request->patient_id;
       $d_id= $request->doctor_appointment;

       if($p_id!=null && $d_id!=null){
           $chk_if_exist=  Appointments::where(['patients_id'=>$p_id,'doctors_id'=>$d_id])->first();
           if($chk_if_exist==null){

              $apt_id= Appointments::create([
                   'patients_id' => $p_id,
                   'doctors_id' => $d_id,
                   'apt_date' => $request->apt_date,
                   'apt_time' => $request->apt_time,
                   'apt_status' => $request->apt_status,
               ]);
               Clinic_Problems::create([
                   'appointments_id'=>$apt_id->id,
               ]);
               Clinic_Observations::create([
                   'appointments_id'=>$apt_id->id,
               ]);
               Clinic_Investigations::create([
                   'appointments_id'=>$apt_id->id,
               ]);
               clinicNotes_advices::create([
                   'appointments_id'=>$apt_id->id,
               ]);
               Clinic_Diagnosis::create([
                   'appointments_id'=>$apt_id->id,
               ]);
               return  redirect()->back();
           }else{
               echo "Daha Önce Bu Hasta İçin Zaten Bir Randevu Kaydı Açılmıştır. Yönlendiriliyorsunuz...";
               header('refresh:4;url=/Appointments');
           }
       }else{
           echo "Lütfen Geçerli Bir Hasta Adı Seçiniz. Yönlendiriliyorsunuz...";
           header('refresh:3;url=/Appointments');
       }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($patient_id,Request $request)
    {
        if($patient_id!=null && $request->dr_id!=null){
            $doctor_id= $request->dr_id;
            $doctor_with_his_her_patient= Auth::user()->doctor_with_his_patients();
            $dr_with_ptn= $doctor_with_his_her_patient->where('patients_id',$patient_id)->where('doctors_id',$doctor_id)->first();
            if($dr_with_ptn!=null){
                return view('pages.Appointment_View',compact('dr_with_ptn'));
            }else{
                echo "Kayıt incelemesi için doktor veya hasta kaydı bulunamadı. Yönlendiriliyorsunuz...";
                return header('refresh:3;url=/Appointments');
            }

        }else{
            echo "(Hatalı URL) <br> Kayıt incelemesi için Null değeri gönderilemez. Yönlendiriliyorsunuz...";
            return  header('refresh:3;url=/Appointments');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($patient_id,Request $request,Doctor $dr)
    {

        $doctor_id = $request->dr_id;
        //Auth::user()->doctor_with_his_patients();
        if($patient_id!=null && $doctor_id!=null){
            $all_doctors= $dr->all_doctors();
            $doctor_with_his_her_patients= Auth::user()->doctor_with_his_patients();

             $dr_with_patient= $doctor_with_his_her_patients->where('patients_id',$patient_id)->where('doctors_id',$doctor_id)->first();
                $problems = Clinic_Problems::where('appointments_id',$dr_with_patient->appointments_id)->pluck('problems','id')->toArray();
                $observations = Clinic_Observations::where('appointments_id',$dr_with_patient->appointments_id)->pluck('observations','id')->toArray();
                $diagnosis = Clinic_Diagnosis::where('appointments_id',$dr_with_patient->appointments_id)->pluck('diagnoses','id')->toArray();
                $investigations = Clinic_Investigations::where('appointments_id',$dr_with_patient->appointments_id)->pluck('investigations','id')->toArray();
                $notes_advices = clinicNotes_advices::where('appointments_id',$dr_with_patient->appointments_id)->pluck('notes_advices','id')->toArray();

             if ($dr_with_patient==null){
                 echo "Düzenleme için doktor veya hasta kaydı bulunamadı. Yönlendiriliyorsunuz...";
                 return  header('refresh:3;url=/Appointments');
             }else{
                // return $dr_with_patient->p_name;
                 return view('pages.Appointment_Edit',
                      compact('all_doctors','doctor_id','dr_with_patient','problems',
                      'observations','diagnosis','investigations','notes_advices'));
             }

        }else{
            echo "(Hatalı URL) <br> Kayıt düzenlemesi için Null değeri gönfderilemez. Yönlendiriliyorsunuz...";
            return header('refresh:4;url=/Appointments');
        }


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
      // return $request->notes;
      /*   $notlar=$request->notes;
         foreach ($notlar as $a){
             return  $a['notes'];
         } */
       // return $request->notes['notes']['problem'][0];
     // return  json_encode($request->notes['notes']['problem']);
      $patient_id=$id;
      $new_doctor_id=$request->doctor;// new doctor
      $previous_doctor_id=$request->prev_doctor;// previous doctor
        if($patient_id!=null && $new_doctor_id!=null && $previous_doctor_id!=null) {
            $chk_if_exist = Appointments::where([ 'doctors_id' => $new_doctor_id, 'patients_id' => $patient_id ])->first();
            if ( $chk_if_exist == null ) { //if not exist same patient infos at another doctor page
                Appointments::where([ 'patients_id' => $patient_id, 'doctors_id' => $previous_doctor_id ])->update([
                    'doctors_id' => $new_doctor_id,
                    'apt_date' => $request->apt_date,
                    'apt_time' => $request->apt_time,
                    'apt_status' => $request->apt_status,
                    'apt_reason' => $request->apt_rsn,
                ]);
            }elseif($new_doctor_id==$previous_doctor_id) {//when it is same doctor, while updating of patient infos..
                 Appointments::where([ 'patients_id' => $patient_id, 'doctors_id' => $previous_doctor_id ])->update([
                   // 'doctors_id' => $new_doctor_id,
                    'apt_date' => $request->apt_date,
                    'apt_time' => $request->apt_time,
                    'apt_status' => $request->apt_status,
                    'apt_reason' => $request->apt_rsn,
                ]);
               $apt_id=$request->apt_id;
              //$notes['notes']['problem'][]="";
              // $notes['notes']['observation'][]="";

              /*****clinic problems ******/
                foreach ($request->problems as $prob_id=>$val){
                    // return "id:".$prob_id." Problem:".$val;
                    $data_prob[]=$prob_id;// collect all request items(problems) at data array
                }
                $the_clinic_problems = Clinic_Problems::where(['appointments_id'=>$apt_id])->get();
                foreach ($the_clinic_problems as $item_prob){// search the db data at request items, if not match just delete it
                    if(in_array($item_prob->id,$data_prob)==false){
                        Clinic_Problems::where('id',$item_prob->id)->delete();
                    }
                }

               if( !empty($request->notes['notes']['problem'])) { //if there is a data create it at db
                   foreach ( $request->notes[ 'notes' ][ 'problem' ] as $val ) {
                       Clinic_Problems::create([
                           'appointments_id' => $chk_if_exist->id,
                           'problems' => $val,
                       ]);
                   }
               }
             /*****End clinic problems ******/

             /*****End clinic observations ******/
              foreach ($request->observations as $obs_id=>$val_obs){
                    // return "id:".$prob_id." Problem:".$val;
                    $data_obs[]=$obs_id;// collect all request items(problems) at data array
                }
                $the_clinic_observations = Clinic_Observations::where(['appointments_id'=>$apt_id])->get();
                foreach ($the_clinic_observations as $item_obs){// search the db data at request items, if not match just delete it
                    if(in_array($item_obs->id,$data_obs)==false){
                        Clinic_Observations::where('id',$item_obs->id)->delete();
                    }
                }

                if(!empty($request->notes['notes']['observation'])) { //if there is a data create it at db
                    foreach ( $request->notes['notes'][ 'observation'] as $val_obs ) {
                        Clinic_Observations::create([
                            'appointments_id' => $chk_if_exist->id,
                            'observations' => $val_obs,
                        ]);
                    }
                }
             /*****End clinic observations ******/

             /*****End clinic diagnosis(teşhis) ******/
                foreach ($request->diagnosis as $diag_id=>$val_diag){
                    // return "id:".$prob_id." Problem:".$val;
                    $data_diag[]=$diag_id;// collect all request items(problems) at data array
                }
                $the_clinic_diagnosis = Clinic_Diagnosis::where(['appointments_id'=>$apt_id])->get();
                foreach ($the_clinic_diagnosis as $item_diag){// search the db data at request items, if not match just delete it
                    if(in_array($item_diag->id,$data_diag)==false){
                        Clinic_Diagnosis::where('id',$item_diag->id)->delete();
                    }
                }

                if(!empty($request->notes['notes']['diagnosis'])) { //if there is a data create it at db
                    foreach ( $request->notes['notes'][ 'diagnosis'] as $val_diag ) {
                        Clinic_Diagnosis::create([
                            'appointments_id' => $chk_if_exist->id,
                            'diagnoses' => $val_diag,
                        ]);
                    }
                }
             /*****End clinic diagnosis(araştırma) ******/

                /***** clinic investigations ******/
                foreach ($request->investigations as $invt_id=>$val_invt){
                    // return "id:".$prob_id." Problem:".$val;
                    $data_invt[]=$invt_id;// collect all request items(problems) at data array
                }
                $the_clinic_investigations = Clinic_Investigations::where(['appointments_id'=>$apt_id])->get();
                foreach ($the_clinic_investigations as $item_invt){// search the db data at request items, if not match just delete it
                    if(in_array($item_invt->id,$data_invt)==false){
                        Clinic_Investigations::where('id',$item_invt->id)->delete();
                    }
                }

                if(!empty($request->notes['notes']['investigation'])) { //if there is a data create it at db
                    foreach ( $request->notes['notes'][ 'investigation'] as $val_invt ) {
                        Clinic_Investigations::create([
                            'appointments_id' => $chk_if_exist->id,
                            'investigations' => $val_invt,
                        ]);
                    }
                }
                /*****End clinic investigations ******/

                /***** clinic notes advices ******/
                foreach ($request->notes_advices as $note_id=>$val_note){
                    // return "id:".$prob_id." Problem:".$val;
                    $data_note[]=$note_id;// collect all request items(problems) at data array
                }
                $the_clinic_note_advices = clinicNotes_advices::where(['appointments_id'=>$apt_id])->get();
                foreach ($the_clinic_note_advices as $item_note){// search the db data at request items, if not match just delete it
                    if(in_array($item_note->id,$data_note)==false){
                        clinicNotes_advices::where('id',$item_note->id)->delete();
                    }
                }

                if(!empty($request->notes['notes']['notes'])) { //if there is a data create it at db
                    foreach ( $request->notes['notes'][ 'notes'] as $val_note ) {
                        clinicNotes_advices::create([
                            'appointments_id' => $chk_if_exist->id,
                            'notes_advices' => $val_note,
                        ]);
                    }
                }
                /*****End clinic notes advices ******/
            }else{
                echo "Doktor değişikliğine gidilmedi, kayıt zaten belirtilen doktarda mevcut. Yönlendiriliyorsunuz...";
                return header('refresh:4;url=/Appointments');
            }
        }else{
            echo "Kayıt düzenlemesi için gerekli bilgiler alınamadı. Yönlendiriliyorsunuz...";
            return header('refresh:2;url=/Appointments');
        }
      // DB::table('medicalClinical_notes')->where('appointments_id',$appointments_id)->update([ ]);
       if($new_doctor_id==$previous_doctor_id){
           return  redirect()->back();
       }else{
           echo "Doktor değişikliğine gidildiği için artık hasta randevusu sadece yeni doktor tarafından yönetilebilir. Yönlendiriliyorsunuz...";
           return header('refresh:4;url=/Appointments');
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
        //
    }
}
