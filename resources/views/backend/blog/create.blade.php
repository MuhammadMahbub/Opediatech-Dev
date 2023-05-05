@extends('layouts.backend.app')

@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Blog</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label>Blog title</label>
                    <input type="text" name="blog_title"  id="blog_id"  placeholder="Enter blog title" class="form-control mb-2">
                    @error('blog_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Blog Slug</label>
                    <input type="text" name="blog_slug" id="blog_slug_id" placeholder="Enter blog Slug" class="form-control mb-2">
                    @error('blog_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Blog Description</label>
                    <textarea name="blog_desc" class="form-control mb-2" cols="7" rows="7" placeholder="Write Description"></textarea>
                    @error('blog_desc')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Image</label>
                    <img src="" alt="">
                    <input type="file" name="blog_image" class="form-control">
                    @error('blog_image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Add Blog">
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

