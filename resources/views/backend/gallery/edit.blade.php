@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="gallery_body"> 
            <div class="card p-3">
                <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                   <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="event_name" id="event_name" class="form-control" value="{{$gallery->event_name}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('event_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Description</label>
                       <textarea name="event_desc" class="form-control" rows="7"> {{ $gallery->event_desc }} </textarea>
                   </div>
                   @error('event_desc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" id="event_slug" value="{{$gallery->slug}}" class="form-control" placeholder="slug">
                   </div>
                   @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                    <div class="form-group">
                        <label for="image"> Previous Thumbnail</label>
                        <img src="{{ asset($gallery->event_image) }}" alt="not found" width="200">
                    </div>
                    <div class="form-group">
                        <label for="image"> New Thumbnail<span class="text-danger">*</span> <span class="text-warning">(Size: 671*545px)</span></label><br>
                        <input type="file" name="event_image" class="form-control" onchange="document.getElementById('thumb_image').src=window.URL.createObjectURL(this.files[0])">
                    </div>
                    @error('event_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-2">
                        <img width="300px" id="thumb_image">
                    </div>

                    <center>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Update</button>
                   </center>

            </form>
        </div>
       
    </div>
</div>
@endsection

@section('backend_footer_script')

    <script>

        $('#event_name').keyup(function() {
            $('#event_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });

        
    </script>

@endsection
 
