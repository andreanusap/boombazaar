<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	//return 'Boom Bazaar Project';
    return view('home');
});

	Route::get('/about', 'PagesController@about');
	Route::get('/home', 'PagesController@home');
	Route::get('/contact', 'TicketsController@create');
	Route::post('/contact', 'TicketsController@store');
	Route::get('/tickets', 'TicketsController@index');
	Route::get('/ticket/{slug?}', 'TicketsController@show');
	Route::get('/ticket/{slug?}/edit','TicketsController@edit');
	Route::post('/ticket/{slug?}/edit','TicketsController@update');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/contact', 'TicketsController@create');
    Route::post('/contact', 'TicketsController@store');
});
