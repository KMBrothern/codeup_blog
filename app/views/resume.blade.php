@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">
</head>

@stop
@section('content')
<h1>My Resumé</h1>
<header>
<h1>Keyasha Brothern</h1>
<p>
Email: kmbrothern85@gmail.com
Website: www.runlvl6.com</p>
</header>

<div class="container">
  <section>
    <h1>Objectives</h1>
      <p>
        Innovative and motivated customer service professional with a genuine interest in serving
        customers. An eager student new to the IT field focused on applying newly gained knowledge in
        Linux ,Apache, MySQL and Cloud services. Resourceful learner with the ability to lead and
        inspire, and contribute creative solutions. A self­-driven leader with excellent communication and
        interpersonal skills, who effectively collaborates with all levels of staff members and cultivates a productive and cohesive working environment.
        </p>
  <p>
    <h1>Technical Skills</h1>
    Programming/Web:
    <ul>
      <li>PHP</li>
      <li>JavaScript</li>
      <li>jquery</li>
      <li>Laravel</li>
  <p>
    <h1>Certifications</h1>
    <ul>
      <li>CompTIA Security +</li>
      <li>CompTIA Network +</li>
      <li>Testout Network Pro</li>
      <li>CompTIA Linux +</li>
      <li>Linux Professional Institute LPIC­1</li>
      <li>Novell Certified Linux Administrator</li>
      <li>Novell Data Center Technical Specialist</li>
  </p>
  <p>
    <h1>Career Development</h1>
    <ul>
      <li><strong>Codeup</strong>, San Antonio TX; Graduation May 26, 2015, Web Development</li><br>
      <li><strong>Rackspace Open Cloud Academy</strong>, San Antonio TX; Graduation November 15, 2013, 
  Linux Systems Administration</li>
  </p>
  </section>
</div>
<div id="footer"><a href="{{{ action ('HomeController@showWelcome') }}}" class="btn btn-default btn-lg"><i class="fa fa-refresh fa-spin"></i> Back to Run Level 6</a></div>
@stop