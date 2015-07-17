<?php

namespace App\Http\Middleware;

use Closure;

class AuthDashboard
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

        if( $cia['slug'] == 'onsingle' && $url[0] != 'company'){
            return $next($request);
        }        
        return abort('404');        
    }
}
