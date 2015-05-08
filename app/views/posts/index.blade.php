@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')
{{{ var_dump($_GET) }}}

    <h1 class="centered">All Blog Posts</h1>
    <form class="form-inline" method="GET">
      <div class="form-group">
          {{ Form::open(array('method' =>'GET','url'=> '/search')) }}
        <label for="search">Search All Posts</label>
        <input type="text" name="search" class="form-control" id="searchBar" placeholder="Enter Search Here">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
        {{ Form::close() }}
    <hr>
    <ul>
        @foreach($posts as $post)
            <h2><a href="{{{ action('PostsController@show', $post->slug)}}}">{{{ $post->title }}}</a></h2>
            <p>Post Created on: {{{ $post->created_at }}}</p>
            <p>{{{ $post->body }}}</p>
        @if(Auth::check())
            <a class="edit" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="fa fa-pencil-square-o fa-2x"></i>Edit Post</a>
        @endif
        @endforeach
    </ul>
    <hr>
  @if(Auth::check())
     <h2><a href="{{{ action('PostsController@create') }}}"><i class="fa fa-pencil-square-o fa-2x"></i>Create New Post</a></h2>
  @endif
    {{$posts->links()}}

@stop
