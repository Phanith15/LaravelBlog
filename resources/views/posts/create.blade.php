@extends('main')
@section('title','| Create New Post')
@section('content')
@section('stylesheet')
  {!! Html::style('css/validate.css') !!} <!-- we use html helper for this -->
@endsection

  <div class="row">
    <div class="col-md-8 offset-2"> <!-- user offset-2 to center col-md-8-->
      <h1>Create New Post</h1>
      <hr>

      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=> '']) !!}
        {{ Form::label('title','Title:')}} <!-- 'titile' is a column name in database table posts -->
        {{ Form::text('title',null,array('class'=>'form-control','required'=> ''))}}

        {{ Form::label('body',"Post Body:")}}
        {{ Form::textarea('body',null, array('class'=>'form-control', 'required'=> ''))}}

        {{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block')) }}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
