@extends('layouts.master')

@section('head')

<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>
@stop

@section('content')
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['body'] }}</p>

@stop