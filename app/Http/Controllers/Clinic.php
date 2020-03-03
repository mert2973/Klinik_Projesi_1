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
    }
    public function st_system_info(){
        $master_dr_id=Auth::user()->id;
        $the_clinic_id="";
        $find_the_attribute_clinic_id=DB::table('masterDr_and_Clinics')->where(['master_dr_id'=>$master_dr_id])->get();
        foreach ($find_the_attribute_clinic_id as $data){
            $the_clinic_id=$data->clinic_id;
        }
      $clinic = Clinics::where(['id'=>$the_clinic_id])->get();
        return view('pages.St_System_Info',compact('clinic'));
    }
    public function clinic_add(Request $request){
        $master_dr_id=Auth::user()->id;
        $the_clinic_id="";
        $find_the_attribute_clinic_id=DB::table('masterDr_and_Clinics')->where(['master_dr_id'=>$master_dr_id ])->get();
        foreach ($find_the_attribute_clinic_id as $data){
           // $master_id=$data->master_dr_id;
            $the_clinic_id=$data->clinic_id;
        }
     if($the_clinic_id!=null){
         Clinics::where(['id'=>$the_clinic_id])->update([
             'c_name'=>$request-> clinic_name,
             'c_legal_name'=>$request-> legal_name,
             'c_phone'=>$request-> phone_1,
             'c_phone_2'=>$request-> phone_2,
             'c_email'=>$request-> email,
             'status'=> 1,
         ]);
     }else{
         $new_master_dr_id=$master_dr_id;
         $new_clinic_id= Clinics::create([
             'c_name'=>$request-> clinic_name,
             'c_legal_name'=>$request-> legal_name,
             'c_phone'=>$request-> phone_1,
             'c_phone_2'=>$request-> phone_2,
             'c_email'=>$request-> email,
             'status'=> 1,
         ]);
         DB::table('masterDr_and_Clinics')->insert([
             'master_dr_id'=>$new_master_dr_id,
             'clinic_id'=>$new_clinic_id->id,
         ]);
     }
     return redirect()->back();
    }

}
