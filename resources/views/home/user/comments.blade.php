@extends('layouts.login')

@section('title', 'User Comments & Reviews')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-4">
	    			<div class="contact-form">
	    				<h2 class="title text-center">User Comment</h2>
						
	    			</div>
                    @include('home.user.usermenu')
	    		</div>
	    		<div class="col-sm-8">
	    			<div class="contact-info">
	    				<h2 class="title text-center">User Comments & Reviews</h2>
	    				<div >
                        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          
                          <th>Product</th>
                          <th>Subject</th>
                          <th>Review</th>
                          <th>Rate</th>
                          <th>Status</th>
                          
                          <th style="width: 40px">Delete</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $comments as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              
                              <td><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                              <td>{{$rs->subject}}</td>
                              <td>{{$rs->review}}</td>
                              <td>{{$rs->rate}}</td>
                              <td>{{$rs->status}}</td>
                             
                              <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                              
                          </tr>
                          
                         @endforeach
                        </tr>
                      </tbody>
                    </table>
                        </div>
	    					
						
	    				
	    			</div>
    			</div>    			
	    		
	</div>
</div>
@endsection