@extends('layouts.adminbase')
@section('title','Category List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
<a href="/admin/category/create" class="btn btn-block btn-success btn-lg" style="background-color:#003E9F;width:319px;">Add Category</a>
    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="/admin">Home</a>/Category List</small>
    <div class="card">
        
                <h5 class="card-header">Category List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Keyword</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th style="width: 40px">Edit</th>
                          <th style="width: 40px">Delete</th>
                          <th style="width: 40px">Show</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $data as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{$rs->title}}</td>
                              <td>{{$rs->keyword}}</td>
                              <td>{{$rs->description}}</td>
                              <td>{{$rs->image}}</td>
                              <td>{{$rs->status}}</td>
                              <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="/admin/category/destroy/{{$rs->id}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                              <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success">Show</a></td>
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