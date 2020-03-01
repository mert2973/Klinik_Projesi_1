<?php

use App\Settings;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create(['name'=>'title',"value"=>"Klinik"]);
        Settings::create(['name'=>'keywords',"value"=>"klinik,doktor,hekim"]);
        Settings::create(['name'=>'facebook',"value"=>"http://klinik2973"]);
    }
}
