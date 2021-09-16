<?php

use App\Http\Controllers\formationtypeController;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return redirect('/home');
});

// Auth::routes();

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
$this->get('oauth2google', 'Auth\Oauth2Controller@oauth2google')->name('oauth2google');
$this->get('googlecallback', 'Auth\Oauth2Controller@googlecallback')->name('googlecallback');
$this->get('oauth2facebook', 'Auth\Oauth2Controller@oauth2facebook')->name('oauth2facebook');
$this->get('facebookcallback', 'Auth\Oauth2Controller@facebookcallback')->name('facebookcallback');
$this->get('oauth2github', 'Auth\Oauth2Controller@oauth2github')->name('oauth2github');
$this->get('githubcallback', 'Auth\Oauth2Controller@githubcallback')->name('githubcallback');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('formationtype', 'formationtypeController');
});

   
    Route::view('/site', 'site');
Route::view('/header', 'header');
Route::view('/body', 'body');
Route::view('/footer', 'footer');
Route::view('/formation', 'formation');
Route::view('/admin', 'admin');
Route::view('/site', 'site'); 
    
    

