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
       <form method="POST" action="{{{ action ('PostsController@store') }}}">
      <div class="form-group">
        <label for="exampleInputTitle1">Post Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputTitle1" placeholder="Enter Post Title" value="{{{ Input::old('title') }}}">
      </div>
      <div class="form-group">
        <label for="exampleInputBody1">Post Content</label>
        <textarea name="content" class="form-control" id="exampleInputContent1" placeholder="Enter Post Content" value="{{{ Input::old('content') }}}"></textarea>
      </div>
      
    <hr>
      <button type="submit" class="btn btn-default form-btn">Submit</button>
    </form>
  </div>
  @stop