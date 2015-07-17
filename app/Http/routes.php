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



Route::get('dashboard', 'Dashboard\DashboardController@getIndex');
Route::get('dashboard/user', 'User\UserController@getIndex');
Route::get('dashboard/company', 'Company\CompanyController@getIndex');
Route::get('dashboard/application', 'Application\ApplicationController@getIndex');
Route::get('dashboard/notification', 'Notification\NotificationController@getIndex');
Route::get('dashboard/report', 'Report\ReportController@getIndex');



Route::get('login', 'Login\LoginController@getLogin');
Route::post('login', 'Login\LoginController@postLogin');
Route::get('logout', 'Login\LoginController@getLogout');

Route::group(['prefix' => 'company/{company}', 'middleware'=>'auth'], function($company){

	Route::get('/', 'Company\CompanyController@getIndex');

	Route::get('/dash', function($company){        
		$try = \App\Models\Company::where('slug', $company)->first();
		dd($try);
	});
});




// Teste commit 


