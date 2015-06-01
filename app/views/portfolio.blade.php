@extends('layouts.master')

@section('head')
<head>
  <link rel="stylesheet" href="/css/resume.css">

</head>

@stop
@section('content')

<header>
<br>
<br>
<h1>My Portfolio</h1>
</header>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-4">
          <h2>Project 1</h2>
          <h5>Whack A Rapper</h5>
          <img src="/img/whackarapper.png">
          <p>
            The goal for this project was to build a fun game based on the concept
            of whack-a-mole. To complete the project a combination of  javascript, jquery, html and css were used.</p>
          <p><a class="btn btn-default" href="{{{ action ('HomeController@showWhack') }}}" role="button">View project »</a></p>
        </div>
        <div class="col-sm-4">
          <h2>Project 2</h2>
          <h5>Some Other Project</h5>
          <img src="/img/happy_muffin.png">
          <p>Muffin jelly beans chocolate tootsie roll. Apple pie macaroon sweet dessert.
           Candy pastry marshmallow tiramisu halvah bonbon soufflé marzipan.</p>
          <p><a class="btn btn-default" href="#" role="button">View project »</a></p>
       </div>
        <div class="col-sm-4">
          <h2>Project 3</h2>
          <h5>Some Other Project</h5>
          <img src="/img/happy_donut.png">
          <p>Jujubes donut chupa chups macaroon cake chupa chups lemon drops cotton candy apple pie.
           Tootsie roll chocolate cake gummies topping. Pastry gingerbread sesame snaps icing chocolate cake.
           Dessert gummi bears liquorice cupcake. Topping jelly beans pastry chocolate.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
      </div>
    </div>
  </div>
      <hr>
      <div class="container" id="footer"><a href="{{{ action ('HomeController@showWelcome') }}}" class="btn btn-default btn-lg"><i class="fa fa-refresh fa-spin"></i> Back to Run Level 6</a></div>




@stop