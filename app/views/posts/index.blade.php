@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')
    <h1>All Posts</h1>
    <hr>
    <ul>
        @foreach($posts as $post)
            <h2>{{{ $post->title }}}</h2>
            <p>{{{ $post->body }}}</p>
        @endforeach

    </ul>
@stop
