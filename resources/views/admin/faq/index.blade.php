@extends('layouts.adminbase')
@section('title','Faq List')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
<a href="{{route('admin.faq.create')}}" class="btn btn-block btn-success btn-lg" style="background-color:#003E9F;width:319px;">Add Question</a>
    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Faq List</small>
    <div class="card">
        
                <h5 class="card-header">Faq List</h5>
                
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Question</th>
                          <th>Answer</th>
                          
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
                              
                              <td>{{$rs->question}}</td>
                              <td>{!! $rs->answer !!}</td>
                              
                              <td>{{$rs->status}}</td>
                              <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a></td>
                              <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                              <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success">Show</a></td>
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