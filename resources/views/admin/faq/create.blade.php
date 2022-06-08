@extends('layouts.adminbase')

@section('title','Add FAQ')
@section('head')
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
endsection

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
    <h1>Add FAQ</h1>
    <div class="col-xl">
                  <div class="card mb-4">

                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="mb-0">Product Elements</h3>
                      <small class="text-muted float-end"> <a href="{{route('admin.index')}}">Home</a></small>
                    </div>

                    <div class="card-body">

                      <form role="form" action="{{route('admin.faq.store')}}" method="post"enctype="multipart/form-data">
                          @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Question</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Question" name="question">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Answer</label>
                          <textarea class="form-control" id="answer" name="answer">

                          </textarea>
                          <script>
                             ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                          </script>
                        </div>
                        <div class="mb-3"> 
                          <label>Status</label>
                          <select class="form-control" id="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                          </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
</div>

@endsection