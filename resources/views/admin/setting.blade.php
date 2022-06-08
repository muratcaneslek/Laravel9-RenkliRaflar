@extends('layouts.adminbase')
@section('title','Setting')

@section('head')
   <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
endsection

@section('content')

<!-- Content wrapper -->

<div class="content-wrapper"><br>
<br>
    <small class="text-muted float-end" style="text-align: right; height: 25px;"> <a href="{{route('admin.index')}}">Home</a>/Setting</small>
    <div class="card">
        <h5 class="card-header">Setting</h5>
       <!-- / Content -->
       <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
        <section class="content">
        @csrf
       <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-general" aria-controls="navs-pills-top-general" aria-selected="true">
                          General
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-smtpemail" aria-controls="navs-pills-top-smtpemail" aria-selected="false">
                          Smtp Email
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-socialmedia" aria-controls="navs-pills-top-socialmedia" aria-selected="false">
                          Social Media
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-aboutus" aria-controls="navs-pills-top-aboutus" aria-selected="false">
                          About Us
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-contactpage" aria-controls="navs-pills-top-contactpage" aria-selected="false">
                            Contact Page
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-references" aria-controls="navs-pills-top-references" aria-selected="false">
                          References
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="navs-pills-top-general" role="tabpanel">
                            <input type="hidden" id="id" value="{{$data->id}}" class="form-control">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->title}}" placeholder="Title" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Keywords</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->keywords}}" placeholder="Keywords" name="keywords">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Description</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->description}}" placeholder="Description" name="description">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Company</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->company}}" placeholder="Company" name="company">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Address</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->address}}" placeholder="Address" name="address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->phone}}" placeholder="Phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Email</label>
                                <input type="text" class="form-control" id="basic-default-fullname" value="{{$data->email}}" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Status</label>
                                <select class="form-control select2" name="status" style="">
                                    <option selected="selected">{{ $data->status }}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputFile">Icon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="icon">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Icon file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <div class="tab-pane fade" id="navs-pills-top-smtpemail" role="tabpanel">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Smtp Server</label>
                            <input type="text" class="form-control" value="{{$data->smtpserver}}" placeholder="Smtp Server" name="smtpserver">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Smtp Email</label>
                            <input type="text" class="form-control" value="{{$data->smtpemail}}" placeholder="Smtp Email" name="smtpemail">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Smtppassword</label>
                            <input type="password" class="form-control" value="{{$data->smtppassword}}" placeholder="Smtppassword" name="smtppassword">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Smtpport</label>
                            <input type="number" class="form-control"  value="{{$data->smtpport}}" placeholder="Smtpport" name="smtpport">
                        </div>
                      </div>

                      <div class="tab-pane fade" id="navs-pills-top-socialmedia" role="tabpanel">
                      <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Fax</label>
                            <input type="text" class="form-control"  value="{{$data->fax}}" placeholder="Fax" name="fax">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Facebook</label>
                            <input type="text" class="form-control"  value="{{$data->facebook}}" placeholder="Facebook" name="facebook">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Instagram</label>
                            <input type="text" class="form-control"  value="{{$data->instagram}}" placeholder="Instagram" name="instagram">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Twitter</label>
                            <input type="text" class="form-control"  value="{{$data->twitter}}" placeholder="Twitter" name="twitter">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Youtube</label>
                            <input type="text" class="form-control"  value="{{$data->youtube}}" placeholder="Youtube" name="youtube">
                        </div>

                      </div>

                      <div class="tab-pane fade" id="navs-pills-top-aboutus" role="tabpanel">
                      <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">About Us</label>
                            <textarea id="aboutus" name="aboutus">{{ $data->aboutus }}</textarea>
                            <script>
                            ClassicEditor
                                .create( document.querySelector( '#aboutus' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="navs-pills-top-contactpage" role="tabpanel">
                      <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Contact</label>
                            <textarea id="contact" name="contact">{{ $data->contact }}</textarea>
                            <script>
                            ClassicEditor
                                .create( document.querySelector( '#contact' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="navs-pills-top-references" role="tabpanel">
                      <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">References</label>
                            <textarea id="references" name="references">{{ $data->references }}</textarea>
                            <script>
                            ClassicEditor
                                .create( document.querySelector( '#references' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                            
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Setting</button>
                  </div>
                  </div>
        </form>         
                
    </div>
</div>
   

            
@endsection

@section('foot')

@endsection