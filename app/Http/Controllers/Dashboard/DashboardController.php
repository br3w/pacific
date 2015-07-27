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

    /** 
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function getIndex(Request $request){ 
        return view('dashboard.index'); 
    }

    // Page User Home
    public function getUser(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'account' => 'active'
            ]); 
    }

/* ==================================================
                REST USER-ACCOUNT
================================================== */

    // Get User Account
    public function getUserAccount(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
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
                'user' => 'active',
                'account' => 'active',
                'update' => true
            ]); 
    }

    // Post User Account
    // Only create User with permiss
    public function postUserAccount(){ 

    }

    // Delete User Account
    public function deleteUserAccount(){ 

    }

/* ==================================================
                REST USER-PROFILE
================================================== */

    // Get User Profile
    public function getUserProfile(){
        $method =  ( User::find(\Auth::user()->id)->profile ) ? 'PUT' : 'POST';
        return view('dashboard.user')
        ->with([
            'user'      => 'active',
            'profile'   => 'active',
            'method'    =>  $method
        ]); 
    }

    // Post User Profile
    public function postUserProfile(Request $request){


        // $this->validate($request, [
        //     'first_name'        => 'required',
        //     'last_name'         => 'required',
        //     'birth_date'        => 'required',
        //     'live_place'        => 'required',
        //     'company'           => 'required',
        //     'office'            => 'required',
        //     'admission_date'    => 'required',
        //     'education'         => 'required',
        //     'institution'       => 'required',
        //     'conclusion'        => 'required'
        // ]);


        dd(str_replace('/', '-', $request->birth_date));
     
        $user    = User::find(\Auth::user()->id);
        $profile = new UserProfile([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            //'birth_date'        => replace('/', '-', $request->birth_date)
            'birth_place'       => $request->birth_place,
            'live_place'        => $request->live_place,
            'company'           => $request->company,
            'office'            => $request->office,
            'admission_date'    => $request->admission_date,
            'education'         => $request->education,
            'institution'       => $request->institution,
            'conclusion'        => $request->conclusion,
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


    }

    // Put User Profile
    public function putUserProfile(Request $request){ 
        dd($request->all());
    }

    // Delete User Profile
    public function deleteUserProfile(){ 
        
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
                REST USER-CONTACT
================================================== */

    // Get User Contact
    public function getUserContact(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'contact' => 'active'
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

