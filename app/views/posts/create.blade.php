@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')

<h1>Create Your Post</h1>
<hr>
  @if($errors->all())
    <div class="alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
    <div class="container">
    {{ Form::open(array('action' => 'PostsController@store')) }}
    @include('posts.form')
  </div>
  @stop