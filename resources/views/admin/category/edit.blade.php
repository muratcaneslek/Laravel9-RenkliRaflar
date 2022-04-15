@extends('layouts.adminbase')
@section('title','Edit Category :'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
    <h1>Edit Category: {{$data->title}}</h1>
    

    <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
    <div class="col-xl">
                  <div class="card mb-4">

                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="mb-0">Category Elements</h3>
                      <small class="text-muted float-end"> <a href="/admin">Home</a></small>
                    </div>

                    <div class="card-body">

                      <form action="/admin/category/store">
                          @csrf

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->title}}" placeholder="Title" name="title">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Keyword</label>
                          <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}" >
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Description</label>
                          <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>

                        <div class="mb-3">
                          <label for="basic-default-fullname" name="image">Choose Image File</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="form-control" id="exampleInputFile">
                            </div>
                          </div>
                        </div>

                        <div class="mb-3"> 
                          <label>Status</label>
                          <select class="form-control" id="form-control" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                          </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                      </form>
                    </div>
                  </div>
                </div>
    </form>

</div>

@endsection

