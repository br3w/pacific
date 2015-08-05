<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserAddressController extends Controller
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

	// GET User Address
	public function getUserAddress(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'address' => 'active'
		]); 
	}

	// POST User Address
	public function postUserAddress(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'address' => 'active'
		]); 
	}

	// PUT User Address
	public function putUserAddress(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'address' => 'active'
		]); 
	}	

	// DELETE User Address
	public function deleteUserAddress(){ 
		return view('dashboard.user')
		->with([
			'user' => 'active', 
			'address' => 'active'
		]); 
	}
}
