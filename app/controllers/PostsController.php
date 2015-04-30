<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
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
		$inputs = Input::all();
		$post = new Post();
		$post->title = $inputs['title'];
		$post->body = $inputs['content'];
		$post->save();
		return Redirect::action('PostsController@index')->withInput();


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$post = Post::findOrFail($id);
			$data = array(
        		'post' => $post
    		);
    		return View::make('posts.show')->with($data);
    	} catch(Exception $e) {
    		$data = array(
    			'error' => $e->getMessage()

    			);
    		return View::make('errors.exceptions')->with($data);
    	}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Edited the post found at id: $id";
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Updated the post found at id: $id";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Deleted the post found at id: $id";
	}


}
