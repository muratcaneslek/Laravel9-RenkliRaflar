<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +9 0000 0000 00 00</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> renkliraflar@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="{{asset('assets')}}/images/home/logo.png" width="200" height="100" alt="" /></a>
						</div>
						<div style="margin-top:30px;margin-right:-21px">
							<div class="btn-group pull-right">
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
										TR
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">USA</a></li>
										<li><a href="#">UK</a></li>
									</ul>
								</div>
								
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
										₺ TL
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">$ DOLLAR</a></li>
										<li><a href="#">£ POUND</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
								<li><a href="#"><i class="fa fa-star"></i> İstek Listesi</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Ödeme Yöntemleri</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i>Giriş Yap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			@php
				$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
			@endphp
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li class="dropdown"><a href="#">Menü<i class="fa fa-angle-down"></i></a>
								@foreach($mainCategories as $rs)
                                    <ul role="menu" class="sub-menu">
										
                                        <li><a href="shop.html">{{$rs->title}}</a></li>
										
                                    </ul>
								@endforeach
                                </li> 
								
								<li><a href="contact-us.html">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->