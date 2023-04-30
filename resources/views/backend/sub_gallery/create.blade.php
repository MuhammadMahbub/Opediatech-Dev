@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Sub Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>

        <div class="gallery_body"> 
            <div class="card p-3">
                <form action="{{ route('sub_gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gallry_id">Gallery<span class="text-danger">*</span></label>
                        <select name="gallery_id" id="gallry_id" class="form-control">
                            <option value="">--Select Gallery--</option>
                            @foreach ($galleries as $gallery)
                                <option value="{{ $gallery->id }}">{{ $gallery->event_name }}</option>
                            @endforeach
                        </select>
                   </div>
                   @error('gallry_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                   <div class="form-group">
                        <label>Title<span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Example:Employee of the month">
                   </div>
                   @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Slug<span class="text-danger">*</span></label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="slug">
                   </div>
                   @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Description<span class="text-danger">*</span></label>
                        <textarea name="description" placeholder="Short description" rows="7" class="form-control"></textarea>
                   </div>
                   @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                    <div class="form-group">
                        <label>Thumbnail<span class="text-danger">*</span> <span class="text-warning">(Size: 671*545px)</span></label>
                        <input type="file" name="thumbnail_image" class="form-control" onchange="document.getElementById('thumb_image').src=window.URL.createObjectURL(this.files[0])" >
                    </div>
                    <div class="mb-2">
                        <img width="300px" id="thumb_image">
                    </div>
                    @error('thumbnail_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Multiple Images</label>
                        <input type="file" name="multiple_image[]" multiple class="form-control" >
                    </div>
                    
                   <center>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Save</button>
                   </center>
                </form>
            </div>
        </div>
       
    </div>
</div>
@endsection

@section('backend_footer_script')

    <script>

        $('#title').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
 
    </script>

@endsection
 
