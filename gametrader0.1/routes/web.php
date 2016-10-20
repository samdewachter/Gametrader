<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/browse', 'HomeController@showGames');

Route::get('/account/{id}', 'AccountController@index');
Route::get('/account/{id}/edit', 'AccountController@edit');
Route::post('/account/{id}/update', 'AccountController@update');
Route::get('/account/{id}/addGame', 'AccountController@addGame');
Route::post('/account/{id}/addGame/store', 'AccountController@storeGame');
