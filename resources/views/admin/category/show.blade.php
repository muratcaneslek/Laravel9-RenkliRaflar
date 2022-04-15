@extends('layouts.adminbase')
@section('title','Show Category :'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
    
    <a href="/admin/category/edit/{{$data->id}}" class="btn btn-block btn-success btn-lg" style="background-color:#003E9F;width:319px;">Edit</a><br>
    <a href="/admin/category/destroy/{{$data->id}}" class="btn btn-block btn-success btn-lg"
        onclick="return confirm('Deleting !! Are you sure ?')" style="background-color:red;width:319px">Delete</a>
    <small class="text-muted float-end"  style="text-align: right; height: 25px;"> <a href="/admin">Home</a></small>

    <div class="card">
                <h5 class="card-header">Detail Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width:30px;">Id</th>
                        <td>{{$data->id}}</td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Title</th>
                        <td>{{$data->title}}</td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Keyword</th>
                        <td>{{$data->keyword}}</td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Image</th>
                        <td></td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Status</th>
                        <td>{{$data->status}}</td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Created Date</th>
                        <td>{{$data->created_at}}</td>
                      </tr>
                      <tr>
                        <th style="width:30px;">Update Date</th>
                        <td>{{$data->updated_at}}</td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>

</div>


@endsection

