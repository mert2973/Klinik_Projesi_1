<?php

namespace App\Http\Controllers;

use App\General_Infos;
use App\User;
use Illuminate\Http\Request;

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
        User::create([
            // 'name','surname','usr_name', 'email', 'password'
           "name" => $request->name ,
           "surname" => $request-> surname,
           "email" => $request-> mail,
           "usr_name" => $request-> usur_name,
           "name" => $request-> password,
            "name" => $request-> phone,


        ]);
        General_Infos::create([
            //'city','country','adress_1','adress_2','gender','date_of_birth',
            //       'department','specility','priority','status','postal_zip','blood_drup','expr_year','awards_count'

            "name" => $request-> blood_group,
            "name" => $request-> gender,
            "name" => $request-> adress1,
            "name" => $request-> adress2,
            "name" => $request-> city,
            "name" => $request-> country,
            "name" => $request-> posta_zip_kodu,
            "name" => $request-> web_status,
            "name" => $request-> priority,
            "name" => $request-> position,
            "name" => $request-> degree,
            "name" => $request-> specility,
            "name" => $request-> experience,
            "name" => $request-> awards,
            "name" => $request-> facebook_link,
            "name" => $request-> twitter_link,
            "name" => $request-> google_plus_link,
            "name" => $request-> instegram_link,
        ]);
        return redirect()->to('/Doctors');
    }
}
