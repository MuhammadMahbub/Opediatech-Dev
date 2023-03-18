@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Edit Category</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

 

        <div class="card-box">
            <form action="{{ route('category.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $data->img }}" name="old_image">

                <div class="form-group mb-3">
                    <label>Category Name</label>
                    <input type="text" name="category_name" value="{{ $data->category_name }}" id="category_name_id" placeholder="Enter Category Name" class="form-control mb-2">
                    @error('category_name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Category title</label>
                    <input type="text" name="title" id="title" value="{{$data->title}}" placeholder="Enter Category title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Image</label>
                    <img src="" alt="">
                    <img  width="200px" id="cat_img" src="{{ asset($data->img) }}" alt="">
                    <input type="file" onchange="document.getElementById('cat_img').src=window.URL.createObjectURL(this.files[0])"  name="img" class="form-control">
              
                    @error('img')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Category Slug</label>
                    <input type="text" name="category_slug" value="{{$data->category_slug}}" id="category_slug_id" placeholder="Enter Category Slug" class="form-control mb-2">
                    @error('category_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Category">
                </div>
            </form>
        </div>
    </div>
   </div>
</div>
@endsection


@section('backend_footer_script')
    <script>
        $('#category_name_id').keyup(function() {
            $('#category_slug_id').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
    </script>
@endsection
