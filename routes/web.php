<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Auth\Controllers'], function(){
	Route::get('login', 'LoginController@showLoginForm')->name('login');
	Route::post('login', 'LoginController@login');
	Route::post('logout', 'LoginController@logout')->name('logout');


	Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'RegisterController@register');


	Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'ResetPasswordController@reset');

});


Route::get('/home', 'Home\Controllers\HomeController@index')->name('home');

Route::group(['prefix' => '/account', 'middleware' => 'auth'], function(){

	Route::get('/{slug}', 'Users\Controllers\userController@index')->name('account');

});

Route::post('/create', function(){

	$conversation = createConversations(1);

});

Route::get('/show', function(){

	$conversation = showConversation(1);

	dd($conversation);

});
