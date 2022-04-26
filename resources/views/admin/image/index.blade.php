@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')
<!-- Content wrapper -->
<h2>{{$product->title}}</h2>
<form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post"enctype="multipart/form-data">
                          @csrf

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Title" name="title">
                          
                        </div>

                        <div class="mb-3">
                          
                          <label for="basic-default-fullname">Choose Image File</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="form-control" name="image" id="exampleInputFile">
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>

                      </form>
                <h1 class="card-header">Product Image List</h1>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          
                          <th style="width: 40px">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $images as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{$rs->title}}</td>
                              
                              <td>
                                @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 70px">
                                @endif
                              </td>
                              
                              <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger"
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
