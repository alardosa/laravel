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

//EXAMPLE - http://localhost/laravel/public/
Route::get('/', function()
{
	return View::make('hello');
});

//EXAMPLE 1 - http://localhost/laravel/public/about
Route::get('about', function() {
    return View::make('about');
});

//EXAMPLE 2 - http://localhost/laravel/public/contact
Route::get('contact', 'PagesController@contact');

//EXAMPLE 3 - http://localhost/laravel/public/users/
Route::resource('users', 'UsersController');