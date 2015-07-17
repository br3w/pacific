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
    public function getIndex(Request $request){ return view('dashboard.index'); }
    public function getUser(){ return view('dashboard.user'); }
    public function getCompany(){ return view('dashboard.company'); }
    public function getApplication(){ return view('dashboard.application'); }
    public function getNotification(){ return view('dashboard.notification'); }
    public function getReport(){ return view('dashboard.report'); }
}

