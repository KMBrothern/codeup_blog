@extends('layouts.master')

@section('head')

<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')
    <div class="container">
        <h1>{{{ $post->title }}}</h1>
        <p>{{{ $post->body }}}</p>

        <h4>Written By: {{{$post->user->username }}}
        <h6>Post Created On : {{{ $post->created_at }}}</h6>
        <h6>Post Last Updated  : {{{ $post->updated_at }}}</h6>

    <a class="edit" href="{{{ action ('PostsController@index') }}}"><i class="fa fa-newspaper-o fa-2x"></i>Back to all posts</a>
    <hr>
        {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id])) }}
            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-trash-o fa-2x"></i>
Delete Post</button>
        {{ Form::close() }}
    </div>

@stop