@extends('layouts.adminbase')
@section('title','Category List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
    <h1>Category List</h1>
    <small class="text-muted float-end" style="text-align: right"> <a href="/admin">Home</a></small>
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
                              <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger">Delete</a></td>
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