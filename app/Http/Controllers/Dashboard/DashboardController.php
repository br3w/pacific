<?php

namespace App\Http\Controllers\Dashboard;

use Validator;
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
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'profile' => 'active'
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

