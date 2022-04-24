@extends('layouts.adminbase')
@section('title','Show Product :'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
    
    <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-block btn-success btn-lg" style="background-color:#003E9F;width:319px;">Edit</a><br>
    <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" class="btn btn-block btn-success btn-lg"
        onclick="return confirm('Deleting !! Are you sure ?')" style="background-color:red;width:319px">Delete</a>
    <small class="text-muted float-end"  style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a></small>

    <div class="card">
                <h5 class="card-header">Detail Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 99px;;">Id</th>
                        <td>{{$data->id}}</td>
                      </tr>
                      <tr>
                        <th>Category</th>
                        <td>{{$data->category_id}}</td>
                      </tr>
                      <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
                      </tr>
                      <tr>
                        <th>Keyword</th>
                        <td>{{$data->keywords}}</td>
                      </tr>
                      <tr>
                        <th>Description</th>
                        <td>{{$data->description}}</td>
                      </tr>
                      <tr>
                        <th>Price</th>
                        <td>{{$data->price}}</td>
                      </tr>
                      <tr>
                        <th>Quantity</th>
                        <td
                        >{{$data->quantity}}</td>
                      </tr>
                      <tr>
                        <th>Minimum Quantity</th>
                        <td>{{$data->minquantity}}</td>
                      </tr>
                      <tr>
                        <th>Tax</th>
                        <td>{{$data->tax}}</td>
                      </tr>
                      <tr>
                        <th>Detail Inf</th>
                        <td>{{$data->detail}}</td>
                      </tr>
                      <tr>
                        <th>Image</th>
                        <td>
                          @if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                          @endif 
                        </td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td>{{$data->status}}</td>
                      </tr>
                      <tr>
                        <th>Created Date</th>
                        <td>{{$data->created_at}}</td>
                      </tr>
                      <tr>
                        <th>Update Date</th>
                        <td>{{$data->updated_at}}</td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>

</div>


@endsection

