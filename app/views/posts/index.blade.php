@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')
    <h1 class="centered">All Posts</h1>
    <hr>
    <ul>
        @foreach($posts as $post)
            <h2><a href="{{{ action('PostsController@show', $post->slug)}}}">{{{ $post->title }}}</a></h2>
            <p>Post Created on: {{{ $post->created_at }}}</p>
            <p>{{{ $post->body }}}</p>
            <a class="edit" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="fa fa-pencil-square-o fa-2x"></i>Edit Post</a>
        @endforeach
    </ul>
    <hr>
     <h2><a href="{{{ action('PostsController@create') }}}"><i class="fa fa-pencil-square-o fa-2x"></i>Create New Post</a></h2>
    {{$posts->links()}}

@stop
