<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Yetkili_MasterDr
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if (Auth::user()->yetkili_kisi_masterDr()){
                return $next($request);
            }else{
                return redirect()->to('yetki_msj');
            }
        }
       return redirect()->back();

    }
}
