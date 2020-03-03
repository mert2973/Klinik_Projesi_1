<?php

use App\Clinics;
use App\General_Infos;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Mehran','email'=>'admin@gmail.com','password'=>bcrypt('1234')]);
        $masterDR_id=User::create(['name'=>'Ahmet','email'=>'doktorM@gmail.com','password'=>bcrypt('1234')]);

        $gen_info_id= General_Infos::create(['status'=>1]);
        DB::table('masterDr_and_GenInfo')->insert(['general_info_id'=>$gen_info_id->id,'masterDR_id'=>$masterDR_id->id]);

        $get_clinic_id=Clinics::create(['status'=>1]);
        DB::table('masterDr_and_Clinics')->insert(['master_dr_id'=>$masterDR_id->id,'clinic_id'=>$get_clinic_id->id]);
    }
}
