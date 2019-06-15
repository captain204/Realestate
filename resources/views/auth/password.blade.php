@extends('layout.master')

@section('content')

<div class="row">
	
	<div class="error">
		
		@if(count($errors)>0)

			<div class="alert alert-danger">
				
				<strong>oops</strong> There was some problems with your input <br> <br>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endoreach
				</ul>
			</div>
		@endif

		<form method ="post" action="{{ url('/password/reset') }}">

				<input type="hidden" name="_token" value="{{csrf_token}}">
				<input type="hidden" name="token" value="{{$token}}">

				<div class="form-group">
					<label>E mail addresss</label>
					<div class="col-md-6">
						<input type="email" name="email" class="form-control" value="{{old('email')}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">
							Send Password Link
						</button>
					</div>
				</div>

		</form

	</div>

</div>



@endsection('content')