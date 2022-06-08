@extends('layouts.product')

@section('title', 'Contact')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Contact Us</h2>
						@include ('home.messages')
	    				<div class="status alert alert-success" style="display: none"></div>
						
				    	<form id="main-contact-form" action="{{route('storemessage')}}" class="contact-form row" method="post">
							@csrf
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name & Surname">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone Number">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
							<div class="form-group col-md-12">
				                <input name="subject" type="text" required="required" class="form-control" rows="8" placeholder="Subject"></input>
				            </div> 
				            <div class="form-group col-md-12">
				                <textarea name="message" type="text" required="required" class="form-control" rows="8" placeholder="Your Message"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>{!! $setting->contact !!}</p>
							
	    				</address>
	    				
	    			</div>
    			</div>    			
	    		
	</div>
</div>
@endsection