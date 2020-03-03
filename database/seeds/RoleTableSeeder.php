<?php

use App\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=array(
            array("name"=>"Admin"),//1
            array("name"=>"Doktor(Master)"), // 2
            array("name"=>"Doktor"), // 3
            array("name"=>"Resepsiyonist"), // 4
        );
        foreach ($roles as $role){
            Roles::create($role);// role tablosuna Admin, Doctor(Master),Doctor,Resepsiyonist rolllerini oluştur
        }
        DB::table('role_user')->insert(['user_id'=>1,'role_id'=>1]);
        DB::table('role_user')->insert(['user_id'=>2,'role_id'=>2]);


    }
}
