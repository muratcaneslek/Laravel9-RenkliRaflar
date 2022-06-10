@extends('layouts.login')

@section('title', 'User ShopCart')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-2">
	    			<div class="contact-form">
	    				<h2 class="title text-center">User ShopCart</h2>
						
	    			</div>
                    @include('home.user.usermenu')
	    		</div>
	    		<div class="col-sm-10">
                    <div class="review-payment">
				        <h2>ShopCart List</h2>
			        </div>
                    <div class="table-responsive cart_info">
				    <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Product</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        @php
                            $total=0;
                        @endphp
                        @foreach($data as $rs)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{Storage::url($rs->product->image)}}" style="width:33px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$rs->product->title}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$rs->product->price}}</p>
							</td>
							<td class="cart_quantity">
                                <form action="{{route('shopcart.update',['id' => $rs->id])}}" method="post">
                                @csrf
								
									
                                        <input type="number" name="quantity" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchance="this.form.submit()">
								
                                 </form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$rs->product->price * $rs->quantity}}</p>
							</td>
							<td class="cart_delete">
								
                                <a href="{{route('shopcart.destroy',['id'=>$rs->id])}}" class="cart_quantity_delete"
                                  onclick="return confirm('Deleting !! Are you sure ?')"><i class="fa fa-times"></i></a>
							</td>
						</tr>

                        @php
                            $total += $rs->product->price * $rs->quantity;
                        @endphp
                        @endforeach
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<td><span>{{$total}}</span></td>
									</tr>

								</table>
                                <button>Place Order</button>
							</td>
						</tr>
                        
					</tbody>
				</table>
			</div>
    			</div>    			
	    		
	</div>
</div>
@endsection