@extends('layouts.adminwindow')
@section('title','Order Detail:'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
    
    <div class="card">
                <h5 class="card-header">Order Detail</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 99px;;">Id</th>
                        <td>{{$data->id}}</td>
                      </tr>
                      <tr>
                        <th>User</th>
                        <td>{{$data->user->title}}</td>
                      </tr>
                      <tr>
                        <th>Name & Surname</th>
                        <td>{{$data->user->name}}</td>
                      </tr>
                      
                      <tr>
                        <th>Phone</th>
                        <td>{{$data->phone}}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td
                        >{{$data->email}}</td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td
                        >{{$data->address}}</td>
                      </tr>
                      <tr>
                        <th>Ip Number</th>
                        <td>{{$data->IP}}</td>
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
                      <tr>
                        <th>Admin Note :
                            <br><br><br>
                            Status :
                        </th>
                        <td>
                          <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <textarea name="note" cols="70">{{$data->note}}</textarea>
                            <br>
                            <select name="status">
                                <option selected>{{$data->status}}</option>
                                <option>Accepted</option>
                                <option>Shipped</option>
                                <option>Canceled</option>
                                <option>Completed</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update </button>
                          </form>
                        </td>
                      </tr>
                    
                    </thead>
                  </table>
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Amount</th>
                          <th>Image</th>
                          <th>Image Gallery</th>
                          <th>Status</th>
                          
                          <th style="width: 40px">Cancel</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $datalist as $rs)
                          <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                              <td>{{$rs->product->title}}</td>
                              <td>{{$rs->price}}</td>
                              <td>{{$rs->quantity}}</td>
                              <td>{{$rs->amount}}</td>
                              <td>
                                @if($rs->product->image)
                                <img src="{{Storage::url($rs->product->image)}}" style="height: 50px">
                                @endif
                              </td>
                              
                              
                              <td>{{$rs->status}}</td>
                              <td>
                                <a href="{{route('admin.order.acceptproduct',['id'=>$rs->id])}}" class="btn btn-success"
                                  onclick="return confirm('Accepting !! Are you sure ?')">Accept</a>
                                
                                  <a href="{{route('admin.order.cancelproduct',['id'=>$rs->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Cancel</a>
                                </td>
                          </tr>
                          
                         @endforeach
                        </tr>
                      </tbody>
                    </table>

                </div>
              </div>

</div>


@endsection

