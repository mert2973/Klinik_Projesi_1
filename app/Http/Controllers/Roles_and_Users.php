<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;

class Roles_and_Users extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_roles(){
        return view('pages.User_Roles');
    }
    public function user_role_add(){
        return view('pages.User_Role_Add');
    }
    public function user_role_edit(){
        return view('pages.User_Role_Edit');
    }

    public function users(){
        return view('pages.Users');
    }
    public function users_add(){
        return view('pages.Users_Add');
    }
    public function users_edit(){
        return view('pages.Users_Edit');
    }

    public function add_the_user_role(Request $request){
        Roles::create([
            'all_roles'=>$request->role_name,
            'role_description'=>$request->role_description,
        ]);

        return redirect()->back();
    }



}
