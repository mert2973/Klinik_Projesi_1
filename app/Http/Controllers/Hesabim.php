<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Role;

class Hesabim extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){
        return "Lütfen Giriş Yapınız";
   }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }
    public function Sifreyi_Yenile(Request $request){
     $request->validate([
         'password' => ['required', 'string', 'min:4', 'confirmed'],
     ]);
     return " it is working";
    }
    public function My_Profile(){
        return view('pages.My_Profile');
    }
}
