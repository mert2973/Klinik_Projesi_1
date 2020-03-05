<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Yetkili_Doktor
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
            $the_user=Auth::user();
            if($the_user->yetkili_kisi_doktor()){
                return $next($request);
            }else{
                return redirect()->back();
            }
        }
        return redirect()->back();
// return redirect()->to('/Dashboard');

    }
}
