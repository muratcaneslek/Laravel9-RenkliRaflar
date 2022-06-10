@extends('layouts.adminbase')
@section('title','User List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>

    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Messages List</small>
    <div class="card">
        
                <h5 class="card-header">User List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th style="width: 40px">Show</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                            @foreach( $data as $rs)
                            <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{$rs->name}}</td>
                              <td>{{$rs->email}}</td>
                              <td>
                                @foreach($rs->roles as $role)
                                  {{$role->name}}
                                  @endforeach
                              </td>
                              <td>

                              </td>
                              
                              <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-success" 
                              onclick="return !window.open(this.href,'','top=50 left=100 width =1100, height=700')">Show</a></td>
                            
                              
                              
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