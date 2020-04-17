<?php

namespace App\Http\Controllers;

use App\Clinics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Clinic extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Yetkili_MasterDr');
        if(Auth::check()==false){
            return "false";
        }
    }


    public function st_system_info(){

        $the_clinic_id=Auth::user()->the_clinic_id();
        $clinic = Clinics::where(['id'=>$the_clinic_id])->first();
        return view('pages.St_System_Info',compact('clinic'));
    }
    public function clinic_add(Request $request){
        $the_clinic_id=Auth::user()->the_clinic_id();

       // $master_dr_id=Auth::user()->id;
       // $the_clinic_id="";
       // $find_the_attribute_clinic_id=DB::table('masterDr_and_Clinics')->where(['master_dr_id'=>$master_dr_id ])->get();
      //  foreach ($find_the_attribute_clinic_id as $data){

         //   $the_clinic_id=$data->clinic_id;
        //}
     if($the_clinic_id!=null){
         Clinics::where(['id'=>$the_clinic_id])->update([
             'c_name'=>$request-> clinic_name,
             'c_legal_name'=>$request-> legal_name,
             'c_phone'=>$request-> phone_1,
             'c_phone_2'=>$request-> phone_2,
             'c_email'=>$request-> email,
             'adress1'=>$request-> adress_1,
             'status'=> 1,
         ]);
     }else{
         echo "Henüz bir klinik Oluşturulmadı";
         return header('refresh:2;url=St_System_Info');
     }
     return redirect()->back();
    }

}
