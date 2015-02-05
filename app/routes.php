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
        return Redirect::route('admin.dashboard');
    }
});

Route::get('/', 'HomeController@index');
Route::get('/about', array('as' => 'main.about', 'uses' => 'HomeController@about') );
Route::get('/contact', array('as' => 'main.contact', 'uses' => 'HomeController@contact') );
Route::post('/message', array('as' => 'main.sendmessage', 'uses' => 'UserMessageController@store'));

Route::group(array('prefix' => 'administrator'), function() {
    Route::get('/', array('as' => 'administrator.dashboard', 'uses' => 'AdminHomeController@index'));
    Route::get('/login', array( 'as'=> 'administrator.login', 'uses' => 'AdminHomeController@login'));
    Route::get('/logout', array( 'as'=> 'administrator.logout', 'uses' => 'AdminHomeController@logout'));
    Route::post('/login', ['as' => 'administrator.dologin', 'uses' => 'AdminHomeController@doLogin']);
    Route::get('/register', array( 'as'=> 'administrator.register', 'uses' => 'AdminHomeController@register'));
    Route::get('/serve-emails', array('as' => 'administrator.serveemails', 'uses' => 'UserMessageController@serveemails'));
    Route::resource('user', 'UserController');
    Route::resource('complex', 'ComplexController');
    Route::resource('message', 'UserMessageController');
    
//    Route::get('/show-users', ['as' => 'administator.show.users', 'uses' => 'UserController@index']);
//    Route::get('/edit/{id}', ['as' => 'administator.edit.user', 'uses' => 'UserController@edit']);
//    Route::get('/update/{id}', ['as' => 'administator.update.user', 'uses' => 'UserController@update']);
//    Route::get('/delete/{id}', ['as' => 'administator.delete.user', 'uses' => 'UserController@destroy']);   
});

Route::when('administrator*', 'sentry_is_logged');





