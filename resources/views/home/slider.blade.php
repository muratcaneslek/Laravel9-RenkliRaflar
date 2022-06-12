<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1> </h1><br>
									<h2>Bahar Şenliği Başladı</h2><br>
									<p>Birbirinden farklı kategorideki ürünlerde sepette 250TL'ye varan indirimler. </p>
									<button type="button" class="btn btn-default get">Sayfaya gitmek için</button>
								</div>
								<div class="col-sm-6">
									<img src="{{Storage::url($sliderdata[0]->image)}}" class="girl img-responsive" style="width: 390px; height: 355px" alt="" />
								</div>
							</div>
							
							
							@foreach($sliderdata as $rs)
							<div class="item">
								<div class="col-sm-6">
									<h1></h1><br>
									<h2>{{$rs->title}}</h2><br>
									<p>Erken al az öde.</p>
									<a href="{{route('product',['id'=>$rs->id])}}"><button type="button" class="btn btn-default get">Sayfaya gitmek için</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{Storage::url($rs->image)}}" class="girl img-responsive" style="width: 390px; height: 355px" alt="" >
									
								</div>
							</div>
							@endforeach
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->