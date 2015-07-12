<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', ['middleware'=>'auth', function() {
    return view('welcome');
}]);

Route::get('login', 'Login\LoginController@getLogin');
Route::post('login', 'Login\LoginController@postLogin');
Route::get('logout', 'Login\LoginController@getLogout');

Route::group(['prefix' => '{company}', 'middleware'=>'auth'], function($company){
    
    Route::get('/', ['middleware'=>'company', function($company){

    }]);

    Route::get('/dash', function($company){        
        $try = \App\Models\Company::where('slug', $company)->first();
        dd($try);
    });
});





