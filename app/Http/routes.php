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

Route::get('/', 'PageController@index');

Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::post('register', 'Auth\AuthController@postRegister');
=======
Route::get('/dashboard', 'AdminController@getAdmin');
Route::get('/dashboard/events/create', 'AdminController@getEventCreate');
Route::post('/dashboard/events/create/create', 'EventController@create');
>>>>>>> 096ddb7f4f532627844779e15283f1c6d136d164
