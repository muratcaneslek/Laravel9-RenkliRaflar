@extends('layouts.login')

@section('title', 'User Login')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">User Login</h2>
					@include('auth.login')
			</div>
		</div>		
	</div>
</div>
@endsection