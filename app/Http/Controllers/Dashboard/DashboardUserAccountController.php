<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardUserAccountController extends Controller
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

    // GET User Account
    public function getUserAccount(){
        return view('dashboard.user')
        ->with([
            'user'    => 'active',
            'account' => 'active'
        ]); 
    }

    // PUT User Account
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
            'user'      => 'active',
            'account'   => 'active',
            'update'    => 'TRUE'
        ]); 
    }
}
