@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-8 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Edit Service Category</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('serviceCategory.index') }}">Edit Service Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('serviceCategory.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $data->image }}" name="old_image">

               <div class="form-group mb-3">
                   <label>Image</label><br>
                   <img  width="200px" id="img_id" src="{{ asset($data->image) }}" alt="">
                   <input type="file" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])"  name="image" class="form-control">
                   @error('image')
                       <span class="text-danger font-weight-bold">{{ $message }}</span>
                   @enderror
               </div>

                <div class="form-group mb-3">
                    <label>Service Category First Name</label>
                    <input type="text" name="category_fname" value="{{ $data->category_fname }}" placeholder="Enter Service Category First Name" class="form-control mb-2">
                    @error('category_fname')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Service Category Last Name</label>
                    <input type="text" name="category_lname" value="{{ $data->category_lname }}" placeholder="Enter Service Category Last Name" class="form-control mb-2">
                    @error('category_lname')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- SLUG -->
                <div class="form-group mb-3">
                    <label>URL</label>
                    <input type="text" id="serviceCatSlug" value="{{ $data->category_slug }}" placeholder="URL" class="form-control mb-2">
                    @error('category_slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" value="{{ $data->category_slug }}"  name="category_slug" id="slug" placeholder="URL" class="form-control mb-2">
 
                <!-- SEO -->
                {{-- <div class="form-group mb-3">
                    <label>SEO TITLE</label>
                    <input type="text" name="seo_title" value="{{ $data->seo_title }}" placeholder="Seo Title" class="form-control mb-2">
                    @error('seo_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>SEO Description</label>
                    <textarea name="seo_description" class="form-control"  cols="30" rows="2" placeholder="SEO Description">{{ $data->seo_description }}</textarea>
                    @error('seo_description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div> --}}


                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Service Category">
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
