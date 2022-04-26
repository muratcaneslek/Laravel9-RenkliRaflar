@extends('layouts.adminbase')
@section('title','Product List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
<a href="{{route('admin.product.create')}}" class="btn btn-block btn-success btn-lg" style="background-color:#003E9F;width:319px;">Add Product</a>
    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Product List</small>
    <div class="card">
        
                <h5 class="card-header">Product List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Image</th>
                          <th>Image Gallery</th>
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
                              <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                              <td>{{$rs->title}}</td>
                              <td>{{$rs->price}}</td>
                              <td>{{$rs->quantity}}</td>
                              
                              <td>
                                @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                @endif
                              </td>
                              <td> <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                      onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                <img src="{{asset('assets')}}/admin/img/gallery.jpg" style="height: 65px">
                              </a>
                              </td>
                              
                              <td>{{$rs->status}}</td>
                              <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                              <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-success">Show</a></td>
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