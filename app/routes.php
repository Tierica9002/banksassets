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
        return Redirect::route('administrator.dashboard');
    }
});
Route::get('/market-practice', array('as' => 'main.marketpractice', 'uses' => 'HomeController@marketPractice'));
Route::get('/', array('as' => 'homepage', 'uses' => 'HomeController@index'));
Route::get('/about', array('as' => 'main.about', 'uses' => 'HomeController@about') );
Route::get('/contact', array('as' => 'main.contact', 'uses' => 'HomeController@contact') );
Route::post('/message', array('as' => 'main.sendmessage', 'uses' => 'ContactController@store'));

Route::group(array('prefix' => 'administrator'), function() {
    Route::get('/', array('as' => 'administrator.dashboard', 'uses' => 'AdminHomeController@index'));
    Route::get('/login', array( 'as'=> 'administrator.login', 'uses' => 'AdminHomeController@login'));
    Route::get('/logout', array( 'as'=> 'administrator.logout', 'uses' => 'AdminHomeController@logout'));
    Route::post('/login', ['as' => 'administrator.dologin', 'uses' => 'AdminHomeController@doLogin']);
    Route::get('/register', array( 'as'=> 'administrator.register', 'uses' => 'AdminHomeController@register'));
    Route::get('/serve-emails', array('as' => 'administrator.serveemails', 'uses' => 'ContactController@serveemails'));
    Route::get('/messages', array('as' => 'administrator.messages', 'uses' => 'ContactController@serveAsMessages'));
    Route::resource('user', 'UserController');
    Route::resource('complex', 'ComplexController');    
    Route::resource('contact', 'ContactController');
    Route::post('/create-xls', array('as' => 'administrator.createxls', 'uses' => 'ContactController@createXls'));
    
});

Route::when('administrator*', 'sentry_is_logged');





