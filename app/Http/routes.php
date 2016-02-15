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

	Route::POST('login',['middleware' => 'guest', 'uses' => 'Auth\AuthController@login']);
	Route::GET('login',['middleware' => 'guest', 'uses' => 'Auth\AuthController@showLoginForm']);
	Route::GET('logout','Auth\AuthController@logout');
	Route::POST('password/email','Auth\PasswordController@sendResetLinkEmail');
	Route::POST('password/reset ','Auth\PasswordController@reset');
	Route::GET('password/reset/{token?}','Auth\PasswordController@showResetForm');
	Route::POST('register','Auth\AuthController@register');
	Route::GET('register','Auth\AuthController@showRegistrationForm');
	
    Route::get('/', 'PagesController@home');
	Route::get('/home', 'PagesController@home');
	Route::get('/about', 'PagesController@about');
	Route::get('/contact','TicketsController@create');
	Route::post('/contact', 'TicketsController@store');
	Route::get('/tickets', ['middleware' => 'auth', 'uses' => 'TicketsController@index']);
	Route::get('/ticket/{slug?}', 'TicketsController@show');
	Route::get('/ticket/{slug?}/edit','TicketsController@edit');
	Route::post('/ticket/{slug?}/edit','TicketsController@update');
	Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
 	Route::post('/comment', 'CommentsController@newComment');
 	Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
 	Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
 	Route::get('/profile','ProfileController@show');
 	Route::post('/profile','ProfileController@update');
 	Route::get('/profile/{token?}/verify','ProfileController@verify');
 	Route::post('/profile/{token?}/verify','ProfileController@verify');
 	Route::get('/event', ['middleware' => 'auth', 'uses' => 'EventController@event']);
 	Route::get('/event/create',['middleware' => 'auth', 'uses' => 'EventController@create']);
 	Route::post('/event/create',['middleware' => 'auth', 'uses' => 'EventController@create']);
 	Route::get('/organizer/create',['middleware' => 'auth', 'uses' => 'OrganizerController@create']);
 	Route::post('/organizer/create',['middleware' => 'auth', 'uses' => 'OrganizerController@create']);
 	Route::get('/createOrganizer',['middleware' => 'auth', 'uses' => 'OrganizerController@createOrganizer']);
 	Route::post('/createOrganizer',['middleware' => 'auth', 'uses' => 'OrganizerController@createOrganizer']);
 	
});
