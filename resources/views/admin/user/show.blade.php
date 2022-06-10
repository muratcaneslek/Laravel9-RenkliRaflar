@extends('layouts.adminwindow')
@section('title','User Detail:'.$data->title)
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
    
    <div class="card">
                <h5 class="card-header">Detail User Data</h5>
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
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                      </tr>
                      <tr>
                        <th>Roles</th>
                        <td> 
                            @foreach($data->roles as $role)
                                  {{$role->name}}
                                  <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger"
                                  onclick="return confirm('Deleting !! Are you sure ?')">[X]</a>
                            @endforeach
                        </td>
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
                        <th>Add Role to User :</th>
                        <td>
                          <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="role_id">
                                @foreach($roles as $role)
                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                  @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">Add Role</button>
                          </form>
                        </td>
                      </tr>
                    
                    </thead>
                  </table>
                </div>
              </div>

</div>


@endsection

