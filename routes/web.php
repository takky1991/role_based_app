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


Route::middleware('guest')->group(function () {
	Route::get('/', function () {
	    return view('frontend/landing_page');
	});
	Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('login', ['as' => '', 'uses' => 'Auth\LoginController@login']);

	// Password Reset Routes...
	Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
	Route::get('password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
	Route::post('password/reset', ['as' => '', 'uses' => 'Auth\ResetPasswordController@reset']);
	Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm'
	]);

	// Registration Routes...
	Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showCandidateRegistrationForm']);
	Route::post('register', ['as' => '','uses' => 'Auth\RegisterController@registerAsCandidate']);
	Route::get('employer_register', ['as' => 'employer.register', 'uses' => 'Auth\RegisterController@showEmployerRegistrationForm']);
	Route::post('employer_register', ['as' => '','uses' => 'Auth\RegisterController@registerAsEmployer']);
	Route::get('register/confirm/{token}', ['as' => 'register.confirm', 'uses' => 'Auth\RegisterController@confirmEmail']);
});

Route::middleware('auth')->group(function () {
	Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
});

Route::middleware(['auth', 'role:candidate'])->group(function () {
	Route::get('home', 'HomeController@index')->name('candidate.home');
});

Route::middleware(['auth', 'role:employer'])->prefix('employer')->group(function () {
	Route::get('home', 'HomeController@index')->name('employer.home');
});
