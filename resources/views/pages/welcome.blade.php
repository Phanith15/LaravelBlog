@extends('main')
@section('title', '| Home')
@section('content')
  <div class="container">
    <div class="row" >
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Hey Charlie, Welcome to  Laravel 5.4 Blog </h1>
          <h3>I hope you like programing like I do! </h3>
          <p><a class ="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>
          <a class="btn btn-primary" href="#">Read More </a>
        </div>
        <hr>
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>
          <a class="btn btn-primary" href="#">Read More </a>
        </div>
        <hr>
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>
          <a class="btn btn-primary" href="#">Read More </a>
        </div>

      </div>
      <div class="col-md-3 offset-1" >

        <h1>Side Bar</h1>
      </div>
    </div>
  </div>
@endsection
