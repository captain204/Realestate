@extends('layouts.master')

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
	{!! Form::open(['url'=>'blogs']) !!}
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
	{!! Form::close() !!}
@endsection