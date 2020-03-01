<?php

namespace App\Providers;

use App\Settings;
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
    }
}
