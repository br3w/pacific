<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserSocial;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserSocialController extends Controller
{ 

    /**
    * Dashboard authentication.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('authDashboard');
    }
    

    // GET User Social
    public function getUserSocial(){ 
        $social  =  User::find(\Auth::user()->id)->social;        
        if(!$social){
            return view('dashboard.user')
            ->with([
                'user'      => 'active',
                'social'    => 'active',
                'method'    => 'POST'
            ]); 
        }
        return view('dashboard.user')
        ->with([
            'user'          => 'active',
            'social'        => 'active',
            'method'        => 'PUT',
            'facebook'      =>  $social->facebook,          
            'twitter'       =>  $social->twitter,
            'linkdin'       =>  $social->linkdin,
            'instagram'     =>  $social->instagram,
            'google_plus'   =>  $social->google_plus,
            'whats_app'     =>  $social->whats_app,
            'waze'          =>  $social->waze,
            'viber'         =>  $social->viber
        ]);
    }

    // POST User Profile
    public function postUserSocial(Request $request){
        $user   = User::find(\Auth::user()->id);
        $social = new UserSocial([
            'facebook'      =>  $request->facebook,          
            'twitter'       =>  $request->twitter,
            'linkdin'       =>  $request->linkdin,
            'instagram'     =>  $request->instagram,
            'google_plus'   =>  $request->google_plus,
            'whats_app'     =>  $request->whats_app,
            'waze'          =>  $request->waze,
            'viber'         =>  $request->viber,
            'user_id'       =>  \Auth::user()->id
        ]);

        $user->social()->save($social);

        return view('dashboard.user')
        ->with([
            'user'              => 'active',
            'social'            => 'active',
            'method'            => 'PUT',
            'sucess'            => 'TRUE',
            'facebook'          =>  $social->facebook,          
            'twitter'           =>  $social->twitter,
            'linkdin'           =>  $social->linkdin,
            'instagram'         =>  $social->instagram,
            'google_plus'       =>  $social->google_plus,
            'whats_app'         =>  $social->whats_app,
            'waze'              =>  $social->waze,
            'viber'             =>  $social->viber,
            'user_id'           =>  \Auth::user()->id
        ]);
    }

    // PUT User Profile
    public function putUserSocial(Request $request){

        $social  = User::find(\Auth::user()->id)->social;

        $social->facebook      =  $request->facebook;          
        $social->twitter       =  $request->twitter;
        $social->linkdin       =  $request->linkdin;
        $social->instagram     =  $request->instagram;
        $social->google_plus   =  $request->google_plus;
        $social->whats_app     =  $request->whats_app;
        $social->waze          =  $request->waze;
        $social->viber         =  $request->viber;
        $social->save();

        return view('dashboard.user')
        ->with([
            'user'              => 'active',
            'social'            => 'active',
            'method'            => 'PUT',
            'sucess'            => 'TRUE',
            'facebook'          =>  $social->facebook,          
            'twitter'           =>  $social->twitter,
            'linkdin'           =>  $social->linkdin,
            'instagram'         =>  $social->instagram,
            'google_plus'       =>  $social->google_plus,
            'whats_app'         =>  $social->whats_app,
            'waze'              =>  $social->waze,
            'viber'             =>  $social->viber,            
        ]);
    }
}
