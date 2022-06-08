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
                        <th>Name & Surname</th>
                        <td>{{$data->name}}</td>
                      </tr>
                      <tr>
                        <th>Phone Number</th>
                        <td>{{$data->phone}}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                      </tr>
                      <tr>
                        <th>Subject</th>
                        <td>{{$data->subject}}</td>
                      </tr>
                      <tr>
                        <th>Message</th>
                        <td
                        >{{$data->message}}</td>
                      </tr>
                      <tr>
                        <th>Ip Number</th>
                        <td>{{$data->ip}}</td>
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
                          <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <textarea class="textarea" id="note" name="note" cols="50">
                              {{$data->note}}
                            </textarea>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                          </form>
                        </td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>

</div>


@endsection

