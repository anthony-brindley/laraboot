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

// admin routes

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

// API routes

Route::any('api/widget', 'ApiController@widgetData');

// Authentication routes

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// forgot password routes

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

// pages routes

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('privacy', 'PagesController@privacy');
Route::get('termsofservice', 'PagesController@terms');

// Socialite routes

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

// Registration routes

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// test routes

//Route::get('test','TestController@index');
Route::get('test',  ['middleware' => 'auth', 'uses' => 'TestController@index']);

// widget routes

Route::get('widget/create', ['as' => 'widget.create', 'uses' => 'WidgetController@create']);
Route::get( 'widget/{id}-{slug?}', ['as' => 'widget.show', 'uses' => 'WidgetController@show']);
Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);

