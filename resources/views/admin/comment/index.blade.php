@extends('layouts.adminbase')
@section('title','Comment & Reviews List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>

    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Comment List</small>
    <div class="card">
        
                <h5 class="card-header">Comment List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Product</th>
                          <th>Subject</th>
                          <th>Review</th>
                          <th>Rate</th>
                          <th>Status</th>
                          <th style="width: 40px">Show</th>
                          <th style="width: 40px">Delete</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $data as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{$rs->user->name}}</td>
                              <td><a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                              <td>{{$rs->subject}}</td>
                              <td>{{$rs->review}}</td>
                              <td>{{$rs->rate}}</td>
                              <td>{{$rs->status}}</td>
                              <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-success" 
                              onclick="return !window.open(this.href,'','top=50 left=100 width =1100, height=700')">Show</a></td>
                            
                              <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
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

@endsection