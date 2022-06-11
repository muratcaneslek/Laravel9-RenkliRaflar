@extends('layouts.login')

@section('title', 'Order Complete')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Order</h2>
					@include('home.messages')
			</div>
		</div>		
	</div>
</div>
@endsection