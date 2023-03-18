@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Category</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>Category Name</label>
                    <input type="text" name="category_name" id="category_name_id" placeholder="Enter Category Name" class="form-control mb-2">
                    @error('category_name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Category title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Category title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Image</label>
                    <img src="" alt="">
                    <input type="file" name="img" class="form-control">
                    @error('img')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Category Slug</label>
                    <input type="text" name="category_slug" id="category_slug_id" placeholder="Enter Category Slug" class="form-control mb-2">
                    @error('category_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Add Category">
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

