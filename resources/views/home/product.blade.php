@extends('layouts.product')

@section('title','RenkliRaflar')


@section('content')

    
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{Storage::url($data->image)}}" alt="" />
							
							</div>
							

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								@include('home.messages')
								<h2>{{$data->title}}</h2>
								<p>Product ID : {{$data->id}}</p>
								
								<span>
									<span>{{$data->price}} ₺</span>
									<label>Quantity:</label>
									<input type="text" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b>{{$data->status}}</p>
								<p><b>Condition:</b> New</p>
								<p>Details : {{$data->detail}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Description</a></li>
							
								<li><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												
												<h5>{{$data->description}}</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									@foreach($reviews as $rs)
										<div class="single-review">
											<div class="review-heading">
												<div><a href="#"><i class="fa fa-user"></i>{{$rs->user->name}}</a></div>
												<div><a href="#"><i class="fa fa-clock"></i>{{$rs->created_at}}</a></div>
												<div class="review-rating pull-right">
													<i class="fa fa-star" @if ($rs->rate<1) -o empty @endif></i>
													<i class="fa fa-star" @if ($rs->rate<2) -o empty @endif></i>
													<i class="fa fa-star" @if ($rs->rate<3) -o empty @endif></i>
													<i class="fa fa-star" @if ($rs->rate<4) -o empty @endif></i>
													<i class="fa fa-star" @if ($rs->rate<5) -o empty @endif></i>

												</div>
											</div>
											<div class="review-body">
												<strong>{{$rs->subject}}</strong>
												<p>{{$rs->review}}</p>

											</div>
										</div>
										@endforeach
									
									
									<p><b>Write Your Review</b></p>
									
									<form action="{{route('storecomment')}}" method="post">
										@csrf
										<span>
											<input class="input" type="hidden" name="product_id" value="{{$data->id}}" />
											<input class="input" type="text" name="subject" placeholder="Subject"/>
											
										</span>
										<textarea class="input" name="review" placeholder="Your Review"></textarea>
										<div class="form-group">
											<div class="input-rating">
												<strong>Your Rating: </strong>
												<div class="stars">
													<input type="radio" id="star1" name="rate" value="1" ><label for="star1"></label>
													<input type="radio" id="star2" name="rate" value="2" ><label for="star2"></label>
													<input type="radio" id="star3" name="rate" value="3" ><label for="star3"></label>
													<input type="radio" id="star4" name="rate" value="4" ><label for="star4"></label>
													<input type="radio" id="star5" name="rate" value="5" ><label for="star5"></label>
													
													
													
													
												</div>
											</div>
										</div>
										@auth
										<button>Submit</button>
										@else
										<a href="/login">For Submit Your Review, Please Login</a>
										@endauth
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($productrand2 as $rs)									
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
											
								@foreach($productrand2 as $rs)				
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