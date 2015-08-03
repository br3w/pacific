<?php

namespace App\Http\Controllers\Dashboard;

use Validator;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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

/* ==================================================
                DASHBOARD
================================================== */
    
    // Page Dashbord
    public function getIndex(Request $request){ 
        return view('dashboard.index'); 
    }

/* ==================================================
               USER HOME
================================================== */

    // Page User Home
    public function getUser(){        
        return view('dashboard.user')
        ->with([
            'user'      => 'active',
            'account'   => 'active'
            ]); 
    }

/* ==================================================
                REST USER-ACCOUNT
================================================== */

    // Get User Account
    public function getUserAccount(){
       return view('dashboard.user')
        ->with([
            'user'    => 'active',
            'account' => 'active'
            ]); 
    }

    // Put User Account
    // Only update password of the user logged
    public function putUserAccount(Request $request){

        $password = \Hash::check( $request->old_password, \Auth::user()->password);
        $userId   = \Auth::user()->id;

        $validator = Validator::make($request->all(), [
            'old_password'   => 'required|min:6',
            'new_password'   => 'required|min:6',
            'conf_password'  => 'required|min:6|same:new_password'
        ]);

        if (!$password && !$validator->fails()){
            $validator->after(function($validator) {
                $validator->errors()->add('old_password', 'Invalid old password field!');                
            });
        }

        if ($validator->fails()) {
            return redirect('dashboard/user-account')
                ->withErrors($validator)
                ->withInput();
        }

        $user = \App\Models\User::find($userId);
        $user->password = \Hash::make($request->new_password);
        $user->save();

        return view('dashboard.user')
            ->with([
                'user'      => 'active',
                'account'   => 'active',
                'update'    => 'TRUE'
            ]); 
    }

/* ==================================================
                REST USER-PROFILE
================================================== */

    // Get User Profile
    public function getUserProfile(){
        
        $profile  =  User::find(\Auth::user()->id)->profile;        
        if(!$profile){
            return view('dashboard.user')
            ->with([
                'user'      => 'active',
                'profile'   => 'active',
                'method'    => 'POST'
            ]); 
        }

        return view('dashboard.user')
        ->with([
            'user'              => 'active',
            'profile'           => 'active',
            'method'            => 'PUT',
            'first_name'        => $profile->first_name,
            'last_name'         => $profile->last_name,
            'birth_date'        => \Carbon\Carbon::parse($profile->birth_date)->format('d/m/Y'),
            'birth_place'       => $profile->birth_place,
            'live_place'        => $profile->live_place,
            'company'           => $profile->company,
            'office'            => $profile->office,
            'admission_date'    => \Carbon\Carbon::parse($profile->admission_date)->format('d/m/Y'),
            'education'         => $profile->education,
            'institution'       => $profile->institution,
            'conclusion'        => \Carbon\Carbon::parse($profile->conclusion)->format('d/m/Y'),
            'favorite_hobby'    => $profile->favorite_hobby,
            'favorite_issue'    => $profile->favorite_issue,
            'favorite_color'    => $profile->favorite_color,
            'favorite_place'    => $profile->favorite_place,
            'favorite_book'     => $profile->favorite_book,
            'favorite_music'    => $profile->favorite_music,
            'favorite_movie'    => $profile->favorite_movie,
            'favorite_theater'  => $profile->favorite_theater,
            'favorite_sport'    => $profile->favorite_sport,
            'favorite_thinker'  => $profile->favorite_thinker
        ]);
    }

    // Post User Profile
    public function postUserProfile(Request $request){
        $this->validate($request, [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'birth_date'        => 'required',
            'live_place'        => 'required',
            'company'           => 'required',
            'office'            => 'required',
            'admission_date'    => 'required',
            'education'         => 'required',
            'institution'       => 'required',
            'conclusion'        => 'required'
        ]);
     
        $user    = User::find(\Auth::user()->id);
        $profile = new UserProfile([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'birth_date'        => \Carbon\Carbon::parse(str_replace('/', '-', $request->birth_date))->format('Y-m-d'),
            'birth_place'       => $request->birth_place,
            'live_place'        => $request->live_place,
            'company'           => $request->company,
            'office'            => $request->office,
            'admission_date'    => \Carbon\Carbon::parse(str_replace('/', '-', $request->admission_date))->format('Y/m/d'),
            'education'         => $request->education,
            'institution'       => $request->institution,
            'conclusion'        => \Carbon\Carbon::parse(str_replace('/', '-', $request->conclusion))->format('Y/m/d'),
            'favorite_hobby'    => $request->favorite_hobby,
            'favorite_issue'    => $request->favorite_issue,
            'favorite_color'    => $request->favorite_color,
            'favorite_place'    => $request->favorite_place,
            'favorite_book'     => $request->favorite_book,
            'favorite_music'    => $request->favorite_music,
            'favorite_movie'    => $request->favorite_movie,
            'favorite_theater'  => $request->favorite_theater,
            'favorite_sport'    => $request->favorite_sport,
            'favorite_thinker'  => $request->favorite_thinker,
            'user_id'           => \Auth::user()->id
        ]);

        $user->profile()->save($profile);

        return view('dashboard.user')
        ->with([
            'user'              => 'active',
            'profile'           => 'active',
            'method'            => 'PUT',
            'first_name'        => $profile->first_name,
            'last_name'         => $profile->last_name,
            'birth_date'        => \Carbon\Carbon::parse($profile->birth_date)->format('d/m/Y'),
            'birth_place'       => $profile->birth_place,
            'live_place'        => $profile->live_place,
            'company'           => $profile->company,
            'office'            => $profile->office,
            'admission_date'    => \Carbon\Carbon::parse($profile->admission_date)->format('d/m/Y'),
            'education'         => $profile->education,
            'institution'       => $profile->institution,
            'conclusion'        => \Carbon\Carbon::parse($profile->conclusion)->format('d/m/Y'),
            'favorite_hobby'    => $profile->favorite_hobby,
            'favorite_issue'    => $profile->favorite_issue,
            'favorite_color'    => $profile->favorite_color,
            'favorite_place'    => $profile->favorite_place,
            'favorite_book'     => $profile->favorite_book,
            'favorite_music'    => $profile->favorite_music,
            'favorite_movie'    => $profile->favorite_movie,
            'favorite_theater'  => $profile->favorite_theater,
            'favorite_sport'    => $profile->favorite_sport,
            'favorite_thinker'  => $profile->favorite_thinker
        ]);
    }

    // Put User Profile
    public function putUserProfile(Request $request){
        $this->validate($request, [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'birth_date'        => 'required',
            'live_place'        => 'required',
            'company'           => 'required',
            'office'            => 'required',
            'admission_date'    => 'required',
            'education'         => 'required',
            'institution'       => 'required',
            'conclusion'        => 'required'
        ]);

        $profile  =  User::find(\Auth::user()->id)->profile; 
        
        $profile->first_name        =   $request->first_name;
        $profile->last_name         =   $request->last_name;
        $profile->birth_date        =   \Carbon\Carbon::parse(str_replace('/', '-', $request->birth_date))->format('Y-m-d');
        $profile->birth_place       =   $request->birth_place;
        $profile->live_place        =   $request->live_place;
        $profile->company           =   $request->company;
        $profile->office            =   $request->office;
        $profile->admission_date    =   \Carbon\Carbon::parse(str_replace('/', '-', $request->admission_date))->format('Y/m/d');
        $profile->education         =   $request->education;
        $profile->institution       =   $request->institution;
        $profile->conclusion        =   \Carbon\Carbon::parse(str_replace('/', '-', $request->conclusion))->format('Y/m/d');
        $profile->favorite_hobby    =   $request->favorite_hobby;
        $profile->favorite_issue    =   $request->favorite_issue;
        $profile->favorite_color    =   $request->favorite_color;
        $profile->favorite_place    =   $request->favorite_place;
        $profile->favorite_book     =   $request->favorite_book;
        $profile->favorite_music    =   $request->favorite_music;
        $profile->favorite_movie    =   $request->favorite_movie;
        $profile->favorite_theater  =   $request->favorite_theater;
        $profile->favorite_sport    =   $request->favorite_sport;
        $profile->favorite_thinker  =   $request->favorite_thinker;
        $profile->save();

        return view('dashboard.user')
        ->with([
            'user'              => 'active',
            'profile'           => 'active',
            'method'            => 'PUT',
            'update'            => 'TRUE',
            'first_name'        => $profile->first_name,
            'last_name'         => $profile->last_name,
            'birth_date'        => \Carbon\Carbon::parse($profile->birth_date)->format('d/m/Y'),
            'birth_place'       => $profile->birth_place,
            'live_place'        => $profile->live_place,
            'company'           => $profile->company,
            'office'            => $profile->office,
            'admission_date'    => \Carbon\Carbon::parse($profile->admission_date)->format('d/m/Y'),
            'education'         => $profile->education,
            'institution'       => $profile->institution,
            'conclusion'        => \Carbon\Carbon::parse($profile->conclusion)->format('d/m/Y'),
            'favorite_hobby'    => $profile->favorite_hobby,
            'favorite_issue'    => $profile->favorite_issue,
            'favorite_color'    => $profile->favorite_color,
            'favorite_place'    => $profile->favorite_place,
            'favorite_book'     => $profile->favorite_book,
            'favorite_music'    => $profile->favorite_music,
            'favorite_movie'    => $profile->favorite_movie,
            'favorite_theater'  => $profile->favorite_theater,
            'favorite_sport'    => $profile->favorite_sport,
            'favorite_thinker'  => $profile->favorite_thinker
        ]);
    }

/* ==================================================
                REST USER-SOCIAL
================================================== */   

    // Get User Social
    public function getUserSocial(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'social' => 'active'
            ]); 
    }

/* ==================================================
                REST USER-ADDRESSS
================================================== */

    // Get User Contact
    public function getUserAddress(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'address' => 'active'
            ]); 
    }  



/* ==================================================
                REST USER-PHONE
================================================== */

    // Get User Contact
    public function getUserphone(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'phone' => 'active'
            ]); 
    }  


/* ==================================================
                REST USER-TEAM
================================================== */  

    // Get User Team
    public function getUserTeam(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active', 
            'team' => 'active'
            ]); 
    }

/* ==================================================
                REST USER-REPORT
================================================== */

    // Get User Report
    public function getUserReport(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'report' => 'active'
            ]); 
    }








    public function getCompany(){ 
        return view('dashboard.company')->with(['company' =>'active']); ; 
    }
    public function getApplication(){ 
        return view('dashboard.application')->with(['application' =>'active']); ; 
    }
    public function getNotification(){ 
        return view('dashboard.notification')->with(['notification' =>'active']); ; 
    }
    public function getReport(){ 
        return view('dashboard.report')->with(['report' =>'active']); ; 
    }
}

