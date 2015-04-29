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
// Making routes exercises

Route::get('/', 'HomeController@showWelcome');

Route::controller('about', 'AboutController');

Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', 'HomeController@showGuess');

Route::get('/whackarapper', 'HomeController@showWhack');


