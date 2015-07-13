<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{
    

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use ThrottlesLogins;

    public function getLogin()
    {
        return view('layouts.login');
    }

    public function postLogin(Request $data)
    {
        if (Auth::attempt(['email' => $data->email, 'password' => $data->password, 'company'=>$data->company, 'active'=> 1])){
            

            return redirect()->intended($data->company);
        }
        dd('não logado');
    }   
    
    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('login');
    } 


}
