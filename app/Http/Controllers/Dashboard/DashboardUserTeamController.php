<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserTeamController extends Controller
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

    // GET User Team
	public function getUserTeam(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'team' => 'active'
		]); 
	}

	// POST User Team
	public function postUserTeam(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'team' => 'active'
		]); 
	}

	// PUT User Team
	public function putUserTeam(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'team' => 'active'
		]); 
	}	

	// DELETE User Team
	public function deleteUserTeam(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'team' => 'active'
		]); 
	}
}
