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

Route::resource('posts', 'PostsController');

Route::get('search', 'PostsController@search');

Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', 'HomeController@showGuess');

Route::get('/whackarapper', 'HomeController@showWhack');

Route::get('login', 'LoginController@login');

Route::post('login', 'LoginController@doLogin');

Route::get('logout', 'LoginController@logout');

Route::get('orm-test', function ()
{
    $query = Post::with('user');

    $search = 'bbatsche';

    $query->where('title', 'like', '%' . $search . '%');
    $query->orWhere('body', 'like', '%' . $search . '%');

    $query->orWhereHas('user', function($q) {
        $q->where('username', 'like', '%bbatsche%');
    });

    $post = $query->orderBy('created_at', 'DESC')->paginate(10);

    dd($post);
});


Route::get('test404', function()
{
    return Str::slug('test This OUT');
    // Log::info('This is some useful information.');
    // Log::warning('Something could be going wrong.');
    // Log::error('Something is really going wrong.');
    // App::abort(404);
});




