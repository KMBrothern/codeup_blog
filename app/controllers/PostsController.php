<?php

class PostsController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		$data = array(
        	'posts' => $posts
    );
    return View::make('posts.index')->with($data);
	}
	


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


    public function store()
        {
        $validator = Validator::make(Input::all(), Post::$rules);

        if ($validator->fails()) {
            Session::flash('errorMessage', 'Oops, something happened! Re-try your post attempt');

            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $post = new Post();
            $post->title = Input::get('title');
            $post->slug = Input::get('title');
            $post->body = Input::get('body');
            $post->user_id = Auth::id();
            $post->save();

            Session::flash('successMessage', 'Nice, your post submitted successfully!');

            Log::info('======================');
            Log::info('Title: ' . Input::get('title'));
            Log::info('Body: ' . Input::get('body'));
            return Redirect::action('PostsController@index');

        }
    }



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = null;

        if(is_numeric($id)) {
            $post = Post::find($id);
		} else {
            $titleAsSlug = $id;
            $post = Post::where('slug', '=', $titleAsSlug)->first();
        }

        if(!$post) {
            Log::error('Model not found');
            App::abort(404);
        }

        $data = array(
    		'post' => $post
		);

		return View::make('posts.show')->with($data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        try {
            $post = Post::findOrFail($id);
            $data =  array(
                'post' => $post
            );
            return View::make('posts.edit')->with($data);
        } catch(Exception $e) {
            Log::error($e);
            App::abort(404);

            return View::make('errors.exceptions')->with($data);

        }

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

        if ($validator->fails()) {
            Session::flash('errorMessage', 'Oops, something happened! Re-try your post attempt');

            return Redirect::back()->withInput()->withErrors($validator);

        } else {
            $post = Post::findOrFail($id);
                $data = array(
                    'post' => $post
                );
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->slug = Input::get('title');
            $post->save();

            Session::flash('successMessage', 'Nice, your post\'s edit was submitted successfully!');
            return Redirect::action('PostsController@index');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
        $post->delete();
        Session::flash('successMessage', 'Your post was deleted successfully!');

        return Redirect::action('PostsController@index');
	}

    // public function validateFields
    // {

    // }

}
