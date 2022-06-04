@extends('layouts.frontbase')
@section('title','RenkliRaflar')

@section('slider')
	@include('home.slider')
@endsection
@section('sidebar')
	@include('home.sidebar')
@endsection
@section('content')
<section>
		<div class="container">
			<div class="row">
			
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Haftanın Çok Satanları</h2>

						@foreach($productlist1 as $rs)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="height: 328.25px"alt="" /></a>
											<h2>{{$rs->price}}</h2>
											<p>{{$rs->title}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<a href="{{route('product',['id'=>$rs->id])}}">
											<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$rs->price}}</h2>
												<p>{{$rs->title}}</p>
												
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div></a>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					
					</div><!--features_items-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($productrand as $rs)									
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}"style="height: 328.25px" alt="" /></a>
													<h2>{{$rs->price}}</h2>
													<p>{{$rs->title}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
								<div class="item">	
											
								@foreach($productrand as $rs)				
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="height: 328.25px" alt="" /></a>
													<h2>{{$rs->price}}</h2>
													<p>{{$rs->title}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	@endsection