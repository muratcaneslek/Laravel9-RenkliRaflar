@extends('layouts.adminwindow')
@section('title','Show Message:'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
    
    <div class="card">
                <h5 class="card-header">Detail Message Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 99px;;">Id</th>
                        <td>{{$data->id}}</td>
                      </tr>
                      <tr>
                        <th>Product</th>
                        <td>{{$data->product->title}}</td>
                      </tr>
                      <tr>
                        <th>Name & Surname</th>
                        <td>{{$data->user->name}}</td>
                      </tr>
                      
                      <tr>
                        <th>Subject</th>
                        <td>{{$data->subject}}</td>
                      </tr>
                      <tr>
                        <th>Review</th>
                        <td
                        >{{$data->review}}</td>
                      </tr>
                      <tr>
                        <th>Rate</th>
                        <td
                        >{{$data->rate}}</td>
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
                        <th>Admin Note :</th>
                        <td>
                          <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Update Comment</button>
                          </form>
                        </td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>

</div>


@endsection

