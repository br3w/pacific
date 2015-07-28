<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\UserProfie;

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
            $profile  =  User::find(\Auth::user()->id)->profile;
            if($profile){
                $request->session()->put('profile.first_name',  $profile->first_name);
                $request->session()->put('profile.laste_name',  $profile->last_name);
                $request->session()->put('profile.full_name',   $profile->first_name .' '.$profile->last_name );
                $request->session()->put('profile.office',  $profile->office);
            }else{
                $request->session()->put('profile.first_name',  \Auth::user()->email);
                $request->session()->put('profile.laste_name',  '');
                $request->session()->put('profile.full_name',   'Please update your profile');
                $request->session()->put('profile.office',  'Undefined');
            }




            return $next($request);
        }        
        return abort('404');        
    }
}
