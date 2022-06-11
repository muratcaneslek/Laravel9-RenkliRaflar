@extends('layouts.adminbase')
@section('title','Order List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>

    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Order List</small>
    <div class="card">
        
                <h5 class="card-header">Order List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>User</th>
                          <th>Name & Surname</th>
                          <th>Phone</th>
                          <th>Email</th>
                          
                          <th>Address</th>
                          <th>Amount</th>
                          <th>Admin Note</th>
                          <th>Status</th>
                          <th style="width: 40px">Show</th>
                          <th style="width: 40px">Delete</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $data as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              
                              <td><a href="{{route('admin.user.show',['id'=>$rs->user_id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width =1100, height=700')">
                                {{$rs->user->name}}</a></td>
                              <td>{{$rs->user->name}}</td>
                              <td>{{$rs->phone}}</td>
                              <td>{{$rs->email}}</td>
                              <td>{{$rs->address}}</td>
                              <td>{{$rs->total}}</td>
                              <td>{{$rs->note}}</td>
                              <td>{{$rs->status}}</td>
                              <td><a href="{{route('admin.order.show',['id'=>$rs->id])}}" class="btn btn-success" 
                              onclick="return !window.open(this.href,'','top=50 left=100 width =1100, height=700')">Show</a></td>
                            
                              <td><a href="{{route('admin.order.cancelorder',['id'=>$rs->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Cancel</a></td>
                              
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