@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-12 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Blog</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('blogDetails.index') }}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('blogDetails.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $data->image }}" name="old_image">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Category</label>
                           <select name="service_category_id" id="" class="form-control">
                               @foreach ($categorys as $item)
                               <option {{ $data->service_category_id == $item->id ? "selected" : ""}} value="{{ $item->id }}">{{ $item->category_fname }} {{ $item->category_lname }}</option>
                               @endforeach
                           </select>
                            @error('service_category_id')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Main Title</label>
                            <input type="text" name="main_title" value="{{ $data->main_title }}" placeholder="Enter Main Title" class="form-control mb-2">
                            @error('main_title')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Main Title Description</label>
                            <textarea name="main_title_desc"  id="maintitledesc" class="form-control mb-2" cols="7" rows="7" placeholder="Write Description">{{ $data->main_title_desc }}</textarea>
                            @error('main_title_desc')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Blog Title</label>
                            <input type="text" name="blog_title" value="{{ $data->blog_title }}"  placeholder="Enter Blog Title" class="form-control mb-2">
                            @error('blog_title')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Blog Title Description</label>
                            <textarea name="blog__title_desc" id="blog__title_desc" class="form-control mb-2" cols="7" rows="7" placeholder="Write Description">{{ $data->blog__title_desc }}</textarea>
                            @error('blog__title_desc')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group mb-3">
                            <label>Quote Title</label>
                            <input type="text" name="quote_title" value="{{ $data->quote_title }}"  placeholder="Enter Blog Title" class="form-control mb-2">
                            @error('quote_title')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Quote Description</label>
                            <textarea name="quote_desc" id="quote_desc" class="form-control mb-2" cols="7" rows="7" placeholder="Write Description">{{ $data->quote_desc }}</textarea>
                            @error('quote_desc')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Details Title</label>
                            <input type="text" name="details_title" value="{{ $data->details_title }}"  placeholder="Enter Blog Title" class="form-control mb-2">
                            @error('details_title')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label>Details Description</label>
                            <textarea name="details_desc" id="details_desc"  class="form-control mb-2" cols="7" rows="7" placeholder="Write Description">{{ $data->details_desc }}</textarea>
                            @error('details_desc')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label>Image</label>
                            <img src="{{ asset($data->image) }}" id="img_id" width="200px" alt="image" class="mb-3">
                            <input type="file" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])" name="blog_image" class="form-control">
                            @error('blog_image')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update">
                </div>
            </form>
        </div>
    </div>
   </div>
</div>
@endsection


