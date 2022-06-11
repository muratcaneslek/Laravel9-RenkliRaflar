@extends('layouts.login')

@section('title', 'User Order List')

@section('content')

<div class="container">
	<div class="row">
     	
	    		<div class="col-sm-4">
	    			<div class="contact-form">
	    				<h2 class="title text-center">User Order List</h2>
						
	    			</div>
                    @include('home.user.usermenu')
	    		</div>
	    		<div class="col-sm-8">
	    			<div class="contact-info">
	    				<h2 class="title text-center">User Order List</h2>
	    				<div >
                        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          
                          <th>Name & Surname</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Status</th>
                          
                          <th style="width: 40px">Cancel</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $data as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              
                              <td>{{$rs->name}}</a></td>
                              <td>{{$rs->phone}}</td>
                              <td>{{$rs->email}}</td>
                              <td>{{$rs->address}}</td>
                              <td>{{$rs->status}}</td>
                             
                              <td><a href="{{route('userpanel.orderdetail',['id'=>$rs->id])}}" class="btn btn-danger"
                                 >Show Detail</a></td>
                              
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