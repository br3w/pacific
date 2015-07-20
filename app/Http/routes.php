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


Route::group(['prefix' => 'dashboard', 'middleware'=>'auth'], function(){
	
	Route::get('/', 			['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getIndex']);
	
	Route::get('user', 			['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUser']);
	Route::get('user-account',	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUserAccount']);
	Route::get('user-profile',	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUserProfile']);
	Route::get('user-team',		['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUserTeam']);
	Route::get('user-report',	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUserReport']);
	Route::get('user-contact',	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getUserContact']);
	
	Route::get('company', 		['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getCompany']);
	Route::get('application', 	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getApplication']);
	Route::get('notification', 	['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getNotification']);
	Route::get('report', 		['middleware'=>'authDashboard','uses' =>'Dashboard\DashboardController@getReport']);
});


Route::group(['prefix' => 'company/{company}', 'middleware'=>'auth'], function($company){
	Route::get('/', 			['middleware'=>'authCompany','uses' =>'Company\CompanyController@getIndex']);
	Route::get('user', 			['middleware'=>'authCompany','uses' =>'Company\CompanyController@getUser']);
	Route::get('company', 		['middleware'=>'authCompany','uses' =>'Company\CompanyController@getCompany']);
	Route::get('application', 	['middleware'=>'authCompany','uses' =>'Company\CompanyController@getApplication']);
	Route::get('notification', 	['middleware'=>'authCompany','uses' =>'Company\CompanyController@getNotification']);
	Route::get('report', 		['middleware'=>'authCompany','uses' =>'Company\CompanyController@getReport']);
});


