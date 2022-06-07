@extends('layouts.product')

@section('title', $category->title)

@section('content')

<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">{{$category->title}} Items</h2>
						@foreach($products as $rs)
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
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
                        @endforeach
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">»</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
    @endsection