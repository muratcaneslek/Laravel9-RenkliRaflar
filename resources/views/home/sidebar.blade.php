<div class="col-sm-3" style="margin-left:5%">
			@php
				$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
			@endphp
					<div class="left-sidebar">
						<h2>Categories</h2>
						@foreach($mainCategories as $rs)
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							<div class="panel panel-default">
							<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$rs->title}}
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
								<div class="panel-body">
										
										@if(count($rs->children))
											@include('home.categorytree',['children' => $rs->children])
										@endif
									
								</div>
								</div>
							</div>
							
						</div><!--/category-products-->
						@endforeach
						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('assets')}}/images/home/shipping.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				<script src="{{asset('assets')}}/js/jquery.js"></script>
	<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
	<script src="{{asset('assets')}}/js/price-range.js"></script>
    <script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>