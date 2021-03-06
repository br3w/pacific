<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    /**
    * Company authentication.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('authCompany');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex(){ 
        return view('company.index')->with(['user' => 'active']);  
    }
    public function getUser(){ 
        return view('company.user')->with(['user' => 'active']); 
    }
    public function getApplication(){ 
        return view('company.application')->with(['application' => 'active']); 
    }
    public function getNotification(){ 
        return view('company.notification')->with(['notification' => 'active']);
    }
    public function getReport(){ 
        return view('company.report')->with(['report' => 'active']); ; 
    }
}
