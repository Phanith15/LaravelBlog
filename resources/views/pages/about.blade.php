@extends('main') <!-- main here is main.php file -->
@section('title', '| About')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1> About Me </h1>
        <h2> {{$fullname}}</h2>
        <h3>{{$email}}</h3>
      </div>

    </div>
  </div>
@endsection
