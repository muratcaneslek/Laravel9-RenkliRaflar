@extends('layouts.login')

@section('title', 'Order Page')

@section('content')

<div class="container">
	<div class="row">
     	@include ('home.messages')
        <form id="main-contact-form" action="{{route('shopcart.storeorder')}}" class="contact-form row" method="post">
			@csrf
	    		<div class="col-sm-7">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Shipping Information</h2>
						
	    				<div class="status alert alert-success" style="display: none"></div>
							
				    	
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" value="{{Auth::user()->name}}">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone Number">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
							<div class="form-group col-md-12">
				                <input name="address" type="text" required="required" class="form-control" rows="8" placeholder="Address"></input>
				            </div> 
				                                  
				            <div class="form-group col-md-6">
				                <input type="hidden" name="total" class="form-control" required="required" value="{{$total}}">
				            </div>
				        
	    			</div>
	    		</div>
	    		<div class="col-sm-5">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Payment Information [ {{$total}} ]</h2>
	    				<address>
                        
				            <div class="form-group col-md-12">
				                <input type="tel" name="holder" class="form-control" placeholder="Card Holder">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="number" name="number" class="form-control" placeholder="Card Number">
				            </div>
							<div class="form-group col-md-12">
				                <input name="date" type="text" class="form-control" placeholder="Exp. Date"></input>
				            </div> 
				            <div class="form-group col-md-12">
				                <textarea name="code" type="text" class="form-control" placeholder="Security Code"></textarea>
				            </div>                        
							
	    				</address>
	    				
	    			</div>
    			</div>   
				<div class="form-group col-md-12">
				     <input type="submit" name="submit" class="btn btn-primary pull-right" value="Complete Order">
				</div> 			
	    </form>
	</div>
</div>
@endsection