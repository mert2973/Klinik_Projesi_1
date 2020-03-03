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
    public function index(){
        return "working";
    }
    public function doctors(){
        return view('pages.Doctors');
    }
    public function doctor_add(){
        return view('pages.Doctor_Add');
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

            "blood_group" => $request-> bloodgroup,
            "gender" => $request-> gender,
            "adress_1" => $request-> adress1,
            "adress_2" => $request-> adress2,
            "city" => $request-> city,
            "country" => $request-> country,
            "postal_zip" => $request-> posta_zip_kodu,
            "status" => $request-> web_status,
            "priority" => $request-> priority,
            "position" => $request-> position,
            "degree" => $request-> degree,
            "specility" => $request-> specility,
            "expr_year" => $request-> experience,
            "awards_count" => $request-> awards,
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
