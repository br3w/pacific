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
	
	//Crud User Account	
	Route::get('user-account',		'Dashboard\DashboardUserAccountController@getUserAccount');
	Route::put('user-account',		'Dashboard\DashboardUserAccountController@putUserAccount');
	Route::post('user-account',		'Dashboard\DashboardUserAccountController@postUserAccount');
	Route::delete('user-account',	'Dashboard\DashboardUserAccountController@deleteUserAccount');

	//Crud User Profile
	Route::get('user-profile',		'Dashboard\DashboardUserProfileController@getUserProfile');
	Route::put('user-profile',		'Dashboard\DashboardUserProfileController@putUserProfile');	
	Route::post('user-profile',		'Dashboard\DashboardUserProfileController@postUserProfile');
	Route::delete('user-profile',	'Dashboard\DashboardUserProfileController@deleteUserProfile');

	//Crud User Social
	Route::get('user-social',		'Dashboard\DashboardUserSocialController@getUserSocial');
	Route::put('user-social',		'Dashboard\DashboardUserSocialController@putUserSocial');
	Route::post('user-social',		'Dashboard\DashboardUserSocialController@postUserSocial');
	Route::delete('user-social',	'Dashboard\DashboardUserSocialController@deleteUserSocial');

	//Crud User Address
	Route::get('user-address',		'Dashboard\DashboardUserAddressController@getUserAddress');
	Route::put('user-address',		'Dashboard\DashboardUserAddressController@putUserAddress');
	Route::post('user-address',		'Dashboard\DashboardUserAddressController@postUserAddress');
	Route::delete('user-address',	'Dashboard\DashboardUserAddressController@deleteUserAddress');	

	//Crud User Phone
	Route::get('user-phone',		'Dashboard\DashboardUserPhoneController@getUserPhone');
	Route::put('user-phone',		'Dashboard\DashboardUserPhoneController@putUserPhone');
	Route::post('user-phone',		'Dashboard\DashboardUserPhoneController@postUserPhone');
	Route::delete('user-phone',		'Dashboard\DashboardUserPhoneController@deleteUserPhone');

	//Crud User Team
	Route::get('user-team',			'Dashboard\DashboardUserTeamController@getUserTeam');
	Route::put('user-team',			'Dashboard\DashboardUserTeamController@putUserTeam');
	Route::post('user-team',		'Dashboard\DashboardUserTeamController@postUserTeam');
	Route::delete('user-team',		'Dashboard\DashboardUserTeamController@deleteUserTeam');

	//Crud User Report
	Route::get('user-report',		'Dashboard\DashboardUserReportController@getUserReport');
	Route::put('user-report',		'Dashboard\DashboardUserReportController@putUserReport');
	Route::post('user-report',		'Dashboard\DashboardUserReportController@postUserReport');
	Route::delete('user-report',	'Dashboard\DashboardUserReportController@deleteUserReport');

	// Get Dashboard
	Route::get('/', 				'Dashboard\DashboardController@getIndex');
	Route::get('user', 			    'Dashboard\DashboardController@getUser');
	Route::get('company', 			'Dashboard\DashboardController@getCompany');
	Route::get('application', 		'Dashboard\DashboardController@getApplication');
	Route::get('notification', 		'Dashboard\DashboardController@getNotification');
	Route::get('report', 			'Dashboard\DashboardController@getReport');
});


Route::group(['prefix' => 'company/{company}', 'middleware'=>'auth'], function($company){
	Route::get('/', 			'Company\CompanyController@getIndex');
	Route::get('user', 			'Company\CompanyController@getUser');
	Route::get('company', 		'Company\CompanyController@getCompany');
	Route::get('application', 	'Company\CompanyController@getApplication');
	Route::get('notification', 	'Company\CompanyController@getNotification');
	Route::get('report', 		'Company\CompanyController@getReport');
});


