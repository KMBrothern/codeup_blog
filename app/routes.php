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

Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', 'HomeController@showGuess');

Route::get('/whackarapper', 'HomeController@showWhack');

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@doLogin');

Route::get('/logout', 'LoginController@logout');

Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->body  = 'It is super easy to create a new post.';
    $post1->save();

    // $posts = Post::all();
    // return $posts;

    // $post = Post::find(1);
    // $post->title = 'Some New Post Title';
    // $post->save();
});

Route::get('test404', function()
{
    Log::info('This is some useful information.');
    Log::warning('Something could be going wrong.');
    Log::error('Something is really going wrong.');
    App::abort(404);
});




