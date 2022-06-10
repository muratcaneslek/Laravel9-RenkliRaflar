@extends('layouts.login')

@section('title', 'User Panel')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-4">
	    			<div class="contact-form">
	    				<h2 class="title text-center">User Menu</h2>
						
	    			</div>
                    @include('home.user.usermenu')
	    		</div>
	    		<div class="col-sm-8">
	    			<div class="contact-info">
	    				<h2 class="title text-center">User Profile</h2>
	    				<div>
                        @include('profile.show')
                        </div>
	    					
						
	    				
	    			</div>
    			</div>    			
	    		
	</div>
</div>
@endsection