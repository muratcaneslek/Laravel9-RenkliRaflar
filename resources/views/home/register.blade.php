@extends('layouts.login')

@section('title', 'User Registration Page')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">User Registration</h2>
					@include('auth.register')
			</div>
		</div>		
	</div>
</div>
@endsection