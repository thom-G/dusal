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

Route::group(['middleware' => 'auth'], function() {
	Route::get('/new', 'ArticlesController@create');
	Route::post('/articles/add', 'ArticlesController@store');
});

<<<<<<< HEAD
=======

>>>>>>> 72272740ff23729df856cf17d261e06eb9e6b58f
Route::get('/', 'PageController@index');
Route::get('/article/{id}', 'ArticlesController@show');
Route::get('/article/category/{id}/{s_id}', 'ArticlesController@category');

Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::post('register', 'Auth\AuthController@postRegister');
<<<<<<< HEAD
Route::get('/dashboard', 'AdminController@getAdmin');
Route::get('/dashboard/events/create', 'AdminController@getEventCreate');
Route::post('/dashboard/events/create/create', 'EventController@create');
=======

// event
Route::get('/event/{id}', 'EventController@show');
Route::get('/events', 'EventController@index');

// admin event 
Route::get('/dashboard', 'AdminController@getAdmin');
Route::get('/dashboard/events/create', 'AdminController@getEventCreate');
Route::post('/dashboard/events/create/create', 'EventController@create');

>>>>>>> 72272740ff23729df856cf17d261e06eb9e6b58f
