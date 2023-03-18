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
                        <label>Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="form-control" value="{{$gallery->event_name}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('event_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label>Event Description</label>
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
                        <label for="image"> Previous Thumbnail</label><br>
                        <img src="{{ asset($gallery->event_image) }}" alt="not found" width="200">
                    </div>
                    <div class="form-group">
                        <input type="file" name="event_image" class="form-control" onchange="document.getElementById('thumb_image').src=window.URL.createObjectURL(this.files[0])">
                    </div>
                    @error('event_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-2">
                        <img width="300px" id="thumb_image">
                    </div>

                    @php
                        $galleryImages = json_decode($gallery->gallery_image);
                    @endphp

                    <label>Event Image Link</label>
                    <div class="form-group">
                        @if ($galleryImages)
                        @foreach ($galleryImages as $item)
                        <div class="row new_properties">
                            <div class="col-10">
                                <input type="text" class="form-control mb-1 delete_option" value="{{$item}}" name="gallery_image[]" placeholder="">
                            </div>
                            <div class="col-2">
                                <button type="button" class="close remove--new_properties">
                                    <span class="option_delete" >&times;</span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="properties-container"></div>
                            <div class="btn btn-info mt-1" id="add_more">Add</div>
                        </div>
                        @error('gallery_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br> 
                        <center>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Update</button>
                        </center>
                    </div>
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

        $(document).ready(function () {

            $('#add_more').click(function (){
                // alert('hi');
                let new_properties_html =
                `<div class="row new_properties">
                    <div class="col-10">
                        <input type="text" name="gallery_image[]" placeholder="http://..." class="form-control mb-1">
                    </div>
                    <div class="col-2">
                    <button type="button" class="close remove--new_properties">
                        <span>&times;</span>
                    </button>
                    </div>
                </div>`;
                $('.properties-container').append(new_properties_html);
            });
            $(document).on('click', '.remove--new_properties', function(){
                $(this).closest(".new_properties").remove();
            });

        });
    </script>

@endsection
 
