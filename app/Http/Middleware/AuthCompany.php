<?php

namespace App\Http\Middleware;

use Closure;

class AuthCompany
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
        $url  = explode('/', \Request::path());
        $user = \Request::session()->get('user');
        $cia  = \Request::session()->get('company');

        if( $url[0] != 'dashboard'  && $url[1] == $cia['slug'] && $cia['active'] == true){
            return $next($request);
        }else{
            return abort('404');
        }
    }
}
