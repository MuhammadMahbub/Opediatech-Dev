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
                <form action="{{ route('sub_gallery.update', $subGallery->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="gallry_id">Gallery <span class="text-danger">*</span></label>
                        <select name="gallery_id" id="gallry_id" class="form-control">
                            @foreach ($galleries as $gallery)
                                <option value="{{ $gallery->id }}" {{ $gallery->id == $subGallery->gallery_id ? 'selected' : '' }}>{{ $gallery->event_name }}</option>
                            @endforeach
                        </select>
                   </div>
                   @error('gallry_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                   <div class="form-group">
                        <label>Title<span class="text-danger">*</span></label>
                        <input type="text" name="title" value="{{ $subGallery->title }}" id="title" class="form-control" placeholder="Example:Employee of the month">
                   </div>
                   @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Slug<span class="text-danger">*</span></label>
                        <input type="text" name="slug" value="{{ $subGallery->slug }}" id="slug" class="form-control" placeholder="slug">
                   </div>
                   @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Description<span class="text-danger">*</span></label>
                        <textarea name="description" placeholder="Short description" rows="7" class="form-control">{{ $subGallery->description }}</textarea>
                   </div>
                   @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                    <div class="form-group">
                        <label>Previous Thumbnail</label>
                        <img src="{{ asset($subGallery->thumbnail_image) }}" width="200" alt="">
                    </div>

                    <div class="form-group">
                        <label>Thumbnail<span class="text-danger">*</span> <span class="text-warning">(Size: 671*545px)</span> </label>
                        <input type="file" name="thumbnail_image" class="form-control" onchange="document.getElementById('thumb_image').src=window.URL.createObjectURL(this.files[0])" >
                    </div>
                    <div class="mb-2">
                        <img width="300px" id="thumb_image">
                    </div>
                    @error('thumbnail_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <h5>All Images</h5>
                    <div class="row mb-3">
                        @forelse ($subGallery->relationWithImages as $image)
                        <div class="col-md-3">
                            <div class="card imageDelete" style="position: relative;" data-id="{{ $image->id }}">
                                <img src="{{ asset($image->image) }}" alt=""> 
                                <span class="bg-danger" style="color: #fff; font-size:24px; line-height: 30px; 
                                position: absolute; top: 10px; right: 10px; height: 30px; width: 30px;
                                display: flex; justify-content: center; align-items: center;
                                border-radius: 50%; cursor: pointer;">
                                        x
                                </span>
                            </div>
                        </div> 
                        @empty
                        <span class="text-danger ml-3">No Images Available</span>
                        @endforelse
                    </div>

                    <div class="form-group mt-3">
                        <label>New Images</label>
                        <input type="file" name="multiple_image[]" multiple class="form-control" >
                    </div>
                    
                   <center>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Update</button>
                   </center>
                </form>
            </div>
        </div>
       
    </div>
</div>
@endsection

@section('backend_footer_script')

    <script>

    $(document).ready(function () {
        $('.imageDelete').click(function(){
            var subGalleryId = $(this).attr('data-id')
            // alert(subGalleryId);

            $.ajax({
                url: "{{ route('multiimageDelete') }}",
                type: "POST",
                data: {
                    subGalleryId: subGalleryId,
                },
                success: function(response){
                    location.reload()
                    toastr.success("Image Deleted")
                    
                }
            });
        })
    })

        $('#title').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
 
    </script>

@endsection
 
