@extends('layouts.product')

@section('title', 'References')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">References</h2>
					{!! $setting->references !!}
			</div>
		</div>		
	</div>
</div>
@endsection