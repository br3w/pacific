<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserReportController extends Controller
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

    // GET User Report
	public function getUserReport(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'report' => 'active'
		]); 
	}

	// POST User Report
	public function postUserReport(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'report' => 'active'
		]); 
	}

	// PUT User Report
	public function putUserReport(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'report' => 'active'
		]); 
	}	

	// DELETE User Report
	public function deleteUserReport(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'report' => 'active'
		]); 
	}
}
