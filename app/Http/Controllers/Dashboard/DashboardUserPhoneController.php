<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserPhoneController extends Controller
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

    // GET User Phone
	public function getUserPhone(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'phone' => 'active'
		]); 
	}

	// POST User Phone
	public function postUserPhone(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'phone' => 'active'
		]); 
	}

	// PUT User Phone
	public function putUserPhone(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'phone' => 'active'
		]); 
	}	

	// DELETE User Phone
	public function deleteUserPhone(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'phone' => 'active'
		]); 
	}
}
