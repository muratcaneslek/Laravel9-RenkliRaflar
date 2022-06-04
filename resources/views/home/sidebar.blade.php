<div class="col-sm-3" style="margin-left:5%">
			@php
				$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
			@endphp
					<div class="left-sidebar">
						<h2>Kategoriler</h2>
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
							@endforeach
						</div><!--/category-products-->
					
						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('assets')}}/images/home/shipping.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>