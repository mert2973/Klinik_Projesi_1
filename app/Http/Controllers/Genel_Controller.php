<?php

namespace App\Http\Controllers;

use App\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Genel_Controller extends Controller
{
    public function __construct()
    {

    }

    public function deneme(){

       return view('pages.deneme');

    }
    public function veri(){
        $users= Auth::user()->all();//find(2);
        echo json_encode($users,true);
    }


}
