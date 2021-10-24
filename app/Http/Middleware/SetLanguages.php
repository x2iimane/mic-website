<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class SetLanguages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        dd($request->locale);

        App::setLocale($request->locale);

        if(session('locale')){
            App::setLocale(session('locale'));
        }else{
            App::setLocale($request->locale);
        }

        return $next($request);
    }
}
