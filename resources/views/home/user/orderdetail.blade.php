@extends('layouts.login')

@section('title', 'User Order Detail')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-3">
	    			<div class="contact-form">
	    				<h2 class="title text-center">User Order Detail</h2>
						
	    			</div>
                    @include('home.user.usermenu')
	    		</div>
	    		<div class="col-sm-9">
                    <div class="review-payment">
				        <h2>Order Items</h2>
			        </div>
                    <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <tr>
                            <th>Name :</th><td>{{$order->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone :</th><td>{{$order->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email :</th><td>{{$order->email}}</td>
                        </tr>
                        <tr>
                            <th>Address :</th><td>{{$order->address}}</td>
                        </tr>
                        <tr>
                            <th>Note :</th><td>{{$order->note}}</td>
                        </tr>
                        <tr>
                            <th>Status :</th><td>{{$order->status}}</td>
                        </tr>
                        </table>

				    <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Product</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Status</td>
							<td>..</td>
						</tr>
					</thead>
					<tbody>
                       
                        @foreach($orderproducts as $rs)
						<tr>
							<td class="cart_product">
								<img src="{{Storage::url($rs->product->image)}}" style="width:33px" alt="">
							</td>
							<td class="cart_description">
								<h4><a href="#">{{$rs->product->title}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$rs->product->price}}</p>
							</td>
							<td class="cart_quantity">
                                <p>{{$rs->quantity}}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$rs->amount}}</p>
							</td>
							<td class="cart_price">
								{{$rs->status}}
							</td>
							<td class="cart_delete">
								@if($rs->status == "New")
                                <a href="{{route('userpanel.cancelproduct',['id'=>$rs->id])}}" class="cart_quantity_delete"
                                  onclick="return confirm('Cancel !! Are you sure ?')"><i class="fa fa-times"></i></a>
								@endif
							</td>
						</tr>

                        @endforeach
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<td><span>{{$order->total}}</span></td>
									</tr>

								</table>
								
							</td>
						</tr>
                        
					</tbody>
				</table>
			</div>
    			</div>    			
	    		
	</div>
</div>
@endsection