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

    // Page User Home
   public function getUser(){        
    	return view('dashboard.user')
    	->with([
        	'user'      => 'active',
        	'account'   => 'active'
        ]); 
   }

	// Page Dashbord
	public function getIndex(Request $request){ 
		return view('dashboard.index'); 
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

