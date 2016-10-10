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


Route::get('/', [
'as' => 'home', 'uses' => 'SettingsController@getSettings'
]);

	
//Route::get('/', function () {
//	return view('welcome');
//})->name('home');


#REGISTRATION
Route::post('/register',[
	'uses' => 'UserController@postRegister',
	'as' => 'register'
	]);


#LOGIN
Route::post('/signin',[
	'uses' => 'UserController@postSignIn',
	'as' => 'signin'
	]);

#LOGOUT
Route::get('/logout',[
	'uses' => 'UserController@getLogout',
	'as' => 'logout'
	]);

#ACCOUNT SETTINGS
Route::get('/account', [
	'uses' => 'UserController@getAccount',
	'as' => 'account',
	'middleware' => 'auth'
	]);

Route::post('/updateaccount', [
	'uses' => 'UserController@postSaveAccount',
	'as' => 'account.save'
	]);

Route::get('/userimage/{filename}', [
	'uses' => 'UserController@getUserImage',
	'as' => 'account.image'
	]);


#POST / DASHBOARD
Route::get('/dashboard',[
	'uses' => 'PostController@getDashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'
	]);

Route::post('/createpost',[
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create',
	'middleware' => 'auth'
	]);

Route::get('/delete-post/{post_id}',[
	'uses' => 'PostController@getDeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth'
	]);

Route::post('/edit', [
	'uses' => 'PostController@postEditPost',
	'as' => 'edit'
	]);

Route::post('/like', [
	'uses' => 'PostController@postLikePost',
	'as' => 'like'
	]);


#GENERAL SETTINGS
Route::post('/general-settings',[
	'uses' => 'SettingsController@postGeneralSettings',
	'as' => 'general-settings'
	]);

Route::get('/general-settings',[
	'uses' => 'SettingsController@populateDropdowns',
	'as' => 'general-settings',
	'middleware' => 'auth'
	]);


#School Type
Route::post('/school_type',[
	'uses' => 'SchoolTypeController@postSchoolType',
	'as' => 'school_type'
	]);

Route::get('/school-type',[
	'uses' => 'SchoolTypeController@getSchoolType',
	'as' => 'school-type',
	'middleware' => 'auth'
	]);



#School Level
Route::post('/school_level',[
	'uses' => 'SchoolLevelController@postSchoolLevel',
	'as' => 'school_level'
	]);

Route::get('/school-level',[
	'uses' => 'SchoolLevelController@getSchoolLevel',
	'as' => 'school-level',
	'middleware' => 'auth'
	]);


#Region
Route::post('/region',[
	'uses' => 'RegionController@postRegion',
	'as' => 'region'
	]);

Route::get('/region',[
	'uses' => 'RegionController@getRegion',
	'as' => 'region',
	'middleware' => 'auth'
	]);

#Municipality
Route::post('/municipality',[
	'uses' => 'MunicipalityController@postMunicipality',
	'as' => 'municipality'
	]);

Route::get('/municipality',[
	'uses' => 'MunicipalityController@getMunicipality',
	'as' => 'municipality',
	'middleware' => 'auth'
	]);


#COUNTRY
Route::post('/country',[
	'uses' => 'CountryController@postCountry',
	'as' => 'country'
	]);

Route::get('/country',[
	'uses' => 'CountryController@getCountry',
	'as' => 'country',
	'middleware' => 'auth'
	]);

#COUNTRY
Route::post('/academic_year',[
	'uses' => 'AcademicYearController@postAcademicYear',
	'as' => 'academic_year'
	]);

Route::get('/academic-year',[
	'uses' => 'AcademicYearController@getAcademicYear',
	'as' => 'academic-year',
	'middleware' => 'auth'
	]);



#FACEBOOK AUTH
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');


