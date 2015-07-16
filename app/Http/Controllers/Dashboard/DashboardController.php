<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	
    /**
     * Login controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
    	return view('dashboard.index');
    }

}
