<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;

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

        App::setLocale($request->locale);

        if(session('locale')){
            App::setLocale(session('locale'));
        }else{
            App::setLocale('fr');
        }

        return $next($request);
    }
}
