<?php

use App\User;
use Illuminate\Database\Seeder;

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
        User::create(['name'=>'Ahmet','email'=>'doktorM@gmail.com','password'=>bcrypt('1234')]);
    }
}
