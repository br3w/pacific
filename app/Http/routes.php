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

	// Get Dashboard
	Route::get('/', 	'Dashboard\DashboardController@getIndex');
	
	/* ==================================================================
							ROUTES FOR USERS
	================================================================== */

	//Get User	
	Route::get('user', 			'Dashboard\DashboardController@getUser');
	Route::get('user-account',	'Dashboard\DashboardController@getUserAccount');
	Route::get('user-profile',	'Dashboard\DashboardController@getUserProfile');
	Route::get('user-social',	'Dashboard\DashboardController@getUserSocial');
	Route::get('user-contact',	'Dashboard\DashboardController@getUserContact');
	Route::get('user-team',		'Dashboard\DashboardController@getUserTeam');
	Route::get('user-report',	'Dashboard\DashboardController@getUserReport');

	//Put User	
	Route::put('user', 			'Dashboard\DashboardController@putUser');
	Route::put('user-account',	'Dashboard\DashboardController@putUserAccount');
	Route::put('user-profile',	'Dashboard\DashboardController@putUserProfile');
	Route::put('user-social',	'Dashboard\DashboardController@putUserSocial');
	Route::put('user-contact',	'Dashboard\DashboardController@putUserContact');
	Route::put('user-team',		'Dashboard\DashboardController@putUserTeam');
	Route::put('user-report',	'Dashboard\DashboardController@putUserReport');

	//Post User	
	Route::post('user', 		'Dashboard\DashboardController@postUser');
	Route::post('user-account',	'Dashboard\DashboardController@postUserAccount');
	Route::post('user-profile',	'Dashboard\DashboardController@postUserProfile');
	Route::post('user-social',	'Dashboard\DashboardController@postUserSocial');
	Route::post('user-contact',	'Dashboard\DashboardController@postUserContact');
	Route::post('user-team',	'Dashboard\DashboardController@postUserTeam');
	Route::post('user-report',	'Dashboard\DashboardController@postUserReport');	

	//Delete User	
	Route::delete('user', 			'Dashboard\DashboardController@deleteUser');
	Route::delete('user-account',	'Dashboard\DashboardController@deleteUserAccount');
	Route::delete('user-profile',	'Dashboard\DashboardController@deleteUserProfile');
	Route::delete('user-social',	'Dashboard\DashboardController@deleteUserSocial');
	Route::delete('user-contact',	'Dashboard\DashboardController@deleteUserContact');
	Route::delete('user-team',		'Dashboard\DashboardController@deleteUserTeam');
	Route::delete('user-report',	'Dashboard\DashboardController@deleteUserReport');



	Route::get('company', 		'Dashboard\DashboardController@getCompany');
	Route::get('application', 	'Dashboard\DashboardController@getApplication');
	Route::get('notification', 	'Dashboard\DashboardController@getNotification');
	Route::get('report', 		'Dashboard\DashboardController@getReport');
});


Route::group(['prefix' => 'company/{company}', 'middleware'=>'auth'], function($company){
	Route::get('/', 			'Company\CompanyController@getIndex');
	Route::get('user', 			'Company\CompanyController@getUser');
	Route::get('company', 		'Company\CompanyController@getCompany');
	Route::get('application', 	'Company\CompanyController@getApplication');
	Route::get('notification', 	'Company\CompanyController@getNotification');
	Route::get('report', 		'Company\CompanyController@getReport');
});


