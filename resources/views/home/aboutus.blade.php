@extends('layouts.product')

@section('title', 'About US')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">About Us</h2>
					{!! $setting->aboutus !!}
			</div>
		</div>		
	</div>
</div>
@endsection