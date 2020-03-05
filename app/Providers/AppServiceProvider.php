<?php

namespace App\Providers;

use App\Clinics;
use App\Settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //config()->set('ayar',DB::table('settings')->pluck('value','name')); // bu şklde veya alt satırdaki gibi olabilir
        config()->set('ayar',Settings::pluck('value','name'));

        /* ****** system info sayfasında  clinic bilgilerini listeleme ***/
       /* $master_dr_id=Auth::user()->id;
        $clinic_id="";
        $chk_clinic=DB::table('users_clinics')->where('user_master_dr_id',$master_dr_id)->get();
        foreach ($chk_clinic as $data){
            $clinic_id=$data->clinic_id;
        }
        $list_clinic = Clinics::where('id',$clinic_id)->get();

        config()->set('clinic_c_name',$list_clinic->pluck('c_name'));
        config()->set('clinic_c_legal_name',$list_clinic->pluck('c_legal_name'));
        config()->set('clinic_c_phone',$list_clinic->pluck('c_phone'));
        config()->set('clinic_c_phone_2',$list_clinic->pluck('c_phone_2'));
        config()->set('clinic_c_email',$list_clinic->pluck('c_email')); */
        /* ******End system info sayfasında  clinic bilgilerini listeleme ***/

    }
}
