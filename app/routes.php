<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
Route::filter('sentry_is_logged', function() {     
    if (!Sentry::check() && (Request::path() != 'administrator/login' && Request::path() != 'administrator/register')) {
        return Redirect::route('administrator.login');
    } elseif(Sentry::check() && (Request::path() == 'administrator/login' || Request::path() == 'administrator/register')) {       
        return Redirect::route('dashboard');
    }
});

Route::get('/', 'HomeController@index');

Route::group(array('prefix' => 'administrator'), function() {
    Route::get('/', array('as' => 'dashboard', 'uses' => 'AdminHomeController@index'));
    Route::get('/login', array( 'as'=> 'administrator.login', 'uses' => 'AdminHomeController@login'));
    Route::post('/login', ['as' => 'administrator.dologin', 'uses' => 'AdminHomeController@doLogin']);
    Route::get('/register', array( 'as'=> 'administrator.register', 'uses' => 'AdminHomeController@register'));
});

Route::when('administrator*', 'sentry_is_logged');





