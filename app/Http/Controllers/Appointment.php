<?php

namespace App\Http\Controllers;

use App\Appointments;
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

               Appointments::create([
                   'patients_id' => $p_id,
                   'doctors_id' => $d_id,
                   'apt_date' => $request->apt_date,
                   'apt_time' => $request->apt_time,
                   'apt_status' => $request->apt_status,
               ]);
               return  redirect()->back();
           }else{
               echo "Daha Önce Bu Hasta İçin Zaten Bir Randevu Kaydı Açtınız. Yönlendiriliyorsunuz...";
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

             if ($dr_with_patient==null){
                 echo "Düzenleme için doktor veya hasta kaydı bulunamadı. Yönlendiriliyorsunuz...";
                 return  header('refresh:3;url=/Appointments');
             }else{
                // return $dr_with_patient->p_name;
                 return view('pages.Appointment_Edit',compact('all_doctors','doctor_id','dr_with_patient'));
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
         $notlar=$request->notes;
         foreach ($notlar as $a){
             return  $a['notes'];
         }
       // return $request->all();
      $patient_id=$id;
      $new_doctor_id=$request->doctor;// new doctor
      $previous_doctor_id=$request->prev_doctor;// new doctor
      Appointments::where(['patients_id'=>$patient_id,'doctors_id'=>$previous_doctor_id])->update([
          'doctors_id'=>$new_doctor_id,
          'apt_date'=>$request->apt_date,
          'apt_time'=>$request->apt_time,
          'apt_status'=>$request->apt_status,
          'apt_prob'=>$request->apt_prob,
      ]);
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
