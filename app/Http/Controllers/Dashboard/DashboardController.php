<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

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

    // Page User Account
    public function getUserAccount(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'account' => 'active'
            ]); 
    }

    // Page User Profile
    public function getUserProfile(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'profile' => 'active'
            ]); 
    }

    // Page User Contact
    public function getUserSocial(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'social' => 'active'
            ]); 
    }

    // Page User Contact
    public function getUserContact(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active',
            'contact' => 'active'
            ]); 
    }    

    // Page User Team
    public function getUserTeam(){ 
        return view('dashboard.user')
        ->with([
            'user' => 'active', 
            'team' => 'active'
            ]); 
    }

    // Page User Report
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

