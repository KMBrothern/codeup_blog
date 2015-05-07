@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')

<h1>Login To Your Account</h1>
<hr>
  @if($errors->all())
    <div class="alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
    <div class="container">
    {{ Form::open(array('action' => 'LoginController@doLogin' )) }}
      <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('placeholder' => 'Enter Email', 'class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('placeholder' => 'Enter Password', 'class' => 'form-control')) }}
      </div>
    <hr>
      <button type="submit" class="btn btn-default form-btn">Login</button>
  {{ Form::close() }}
  </div>
  @stop