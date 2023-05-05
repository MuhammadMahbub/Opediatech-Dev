@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Service Category</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('serviceCategory.index') }}">Service Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('serviceCategory.store') }}" method="post"  enctype="multipart/form-data">

                @csrf
                <div class="form-group mb-3">
                    <label>Category Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Service Category First Name</label>
                    <input type="text" name="category_fname" value="{{ old('category_fname') }}" placeholder="Enter Service Category First Name" class="form-control mb-2">
                    @error('category_fname')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Service Category Last Name</label>
                    <input type="text" name="category_lname" value="{{ old('category_lname') }}" placeholder="Enter Service Category Last Name" class="form-control mb-2">
                    @error('category_lname')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- SLUG -->
                <div class="form-group mb-3">
                    <label>URL</label>
                    <input type="text" id="serviceCatSlug" value="{{ old('category_slug') }}" placeholder="URL" class="form-control mb-2">
                    @error('category_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="category_slug" id="slug" placeholder="URL" class="form-control mb-2">



                <!-- SEO -->
                {{-- <div class="form-group mb-3">
                    <label>SEO TITLE</label>
                    <input type="text" name="seo_title" value="{{ old('seo_title') }}" placeholder="Seo Title" class="form-control mb-2">
                    @error('seo_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group mb-3">
                    <label>SEO Description</label>
                    <textarea name="seo_description" class="form-control"  cols="30" rows="2" placeholder="SEO Description">{{ old('seo_description') }}</textarea>
                    @error('seo_description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div> --}}



                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Add Service Category">
                </div>
            </form>
        </div>
    </div>
   </div>
</div>
@endsection

@section('backend_footer_script')
    <script>
    // Slug
 $('#serviceCatSlug').keyup(function() {
      $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
});

           $('#cate_summerNote').summernote();
    </script>
@endsection
