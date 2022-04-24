@extends('layouts.adminbase')
@section('title','Add Product')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper"><br>
<br>
    <h1>Add Product</h1>
    <div class="col-xl">
                  <div class="card mb-4">

                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="mb-0">Product Elements</h3>
                      <small class="text-muted float-end"> <a href="{{route('admin.index')}}">Home</a></small>
                    </div>

                    <div class="card-body">

                      <form role="form" action="{{route('admin.product.store')}}" method="post"enctype="multipart/form-data">
                          @csrf

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Parent Product</label>
                          <select class="form-control" name="category_id">
                            @foreach($data as $rs)
                              <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Title" name="title">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Keyword</label>
                          <input type="text" class="form-control" name="keywords" placeholder="Keyword">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Description</label>
                          <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Price</label>
                          <input type="number" class="form-control" name="price" value="0">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Quantity</label>
                          <input type="number" class="form-control" name="quantity" value="0">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Minimum Quantity</label>
                          <input type="number" class="form-control" name="minquantity" value="0">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Tax %</label>
                          <input type="number" class="form-control" name="tax" value="0">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Detail Inf</label>
                          <textarea class="form-control" name="detail">

                          </textarea>
                        </div>

                        <div class="mb-3">
                          
                          <label for="basic-default-fullname">Choose Image File</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="form-control" name="image" id="exampleInputFile">
                            </div>
                          </div>
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