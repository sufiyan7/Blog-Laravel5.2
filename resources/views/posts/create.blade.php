@extends('master')

@section('title','| Create a Post')


@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>

      {!! Form::open(array('route' => 'posts.store')) !!}
        {{ Form::label('title','Title:') }}
        {{ Form::text('title',null,array('class'=>'form-control','required'=>'', 'maxlength'=>'255')) }}

        {{ Form::label('slug','Slug:') }}
        {{ Form::text('title',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255')) }}

        {{ Form::label('body','Body:') }}
        {{ Form::textarea('body',null,array('class'=>'form-control')) }}

        {{ Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}
      {!! Form::close() !!}


    </div>
  </div>

</div>

@endsection
