@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Update Blog</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Blog</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('blog.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" value="{{ $data->blog_image }}" name="old_image">
                <div class="form-group mb-3">
                    <label>Blog title</label>
                    <input type="text" name="blog_title" value="{{ $data->blog_title }}"  id="blog_id" class="form-control mb-2">
                    @error('blog_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Blog Slug</label>
                    <input type="text" name="blog_slug"  value="{{ $data->blog_slug }}"  id="blog_slug_id"  class="form-control mb-2">
                    @error('blog_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Blog Description</label>
                    <textarea name="blog_desc" class="form-control mb-2" cols="7" rows="7" placeholder="Write Description">{{ $data->blog_desc }}</textarea>
                    @error('blog_desc')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Image</label>
                    <img width="200px" src="{{ asset($data->blog_image) }}" alt="img" id="img_id" class="mb-4">
                    <input type="file" name="blog_image" class="form-control" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])" >
                    @error('blog_image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Blog">
                </div>
            </form>
        </div>
    </div>
   </div>
</div>
@endsection

@section('backend_footer_script')
    <script>
        $('#blog_id').keyup(function() {
            $('#blog_slug_id').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
    </script>
@endsection

