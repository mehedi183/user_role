<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*

*/

Route::group(['$middleware' => 'web'], function() {
	Route::get('/', [
		'uses' => 'UserController@getWelcome',
		'as' => 'welcome'
		]);
	Route::post('/signup', [
		'uses' => 'UserController@postSignUp',
		'as' => 'signUp'
		]);
	Route::post('/signin', [
		'uses' => 'UserController@postSignIn',
		'as' => 'signin'
		]);
	Route::get('/dashboard', [
		'uses' => 'UserController@getDashboard',
		'as' => 'dashboard',
		'middleware' => 'auth'
		]);
	
	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'user.logout'
		]);

	Route::get('/home', [
		'uses' => 'UserController@getHome',
		'as' => 'home'
		]);
	Route::get('/author', [
		'uses' => 'UserController@getAuthor',
		'as' => 'author'
		]);
	Route::get('/admin', [
		'uses' => 'UserController@getAdmin',
		'as' => 'admin'
		]);
	Route::get('/new', [
		'uses' => 'UserController@newArticle',
		'as' => 'new'
		]);
	
	
	/*Route::post('/update_account', [
		'uses' => 'UserController@postUpdateAccount',
		'as' => 'account.save'
		]);
		*/

});
