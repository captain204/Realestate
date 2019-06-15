@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Create Blog post</h1>
	<br>
	@if($errors->any())
		<ul class="alert-danger">
		@foreach($errors->all() as $error)
				<li>{{$error}}</li>
		@endforeach
		</ul>

	@endif
	{!! Form::model($blog,['method'=>'PATCH','action'=>['BlogsController@update',$blog->id]]) !!}
	<div class="form-group">
		{!! Form::label('title','Blog Title')!!}
		{!! Form::text('title', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('body','Blog body')!!}
		{!! Form::text('body',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		
		{!! Form::submit('Add blog',['class'=>'btn btn-primary'])!!}
	</div>
	<div class="form-group">
		
		{!! Form::model($blog,['method'=>'DELETE','action'=>['BlogsController@destroy',$blog->id]]) !!}
		     {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
		{!! Form::close() !!}		
	</div>
	{!! Form::close() !!}
@endsection