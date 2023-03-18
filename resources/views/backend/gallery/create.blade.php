@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>

        <div class="gallery_body"> 
            <div class="card p-3">
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Example:Employee of the month">
                   </div>
                   @error('event_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror



                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea name="event_desc" placeholder="Event short description" rows="7" class="form-control"></textarea>
                   </div>
                   @error('event_desc')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror



                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" id="event_slug" class="form-control" placeholder="slug">
                   </div>
                   @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                   
                    <div class="form-group">
                        <label>Event Thumbnail</label>
                        <input type="file" name="event_image" class="form-control" onchange="document.getElementById('thumb_image').src=window.URL.createObjectURL(this.files[0])" >
                    </div>
                    <div class="mb-2">
                        <img width="300px" id="thumb_image">
                    </div>
                    @error('event_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <label>Event Image Link</label>
                    <div class="event_item">
                        <div class="row">
                            <div class="col-md-11">
                                <input type="text" name="gallery_image[]" placeholder="http://..." class="form-control">
                            </div>
                            <div class="col-md-1 text-center">
                                <button type="button" class="btn btn-danger remove_btn">&times;</button>
                            </div>
                        </div>
                    </div>
                    <div class="add_event"></div>
                        <div class="btn btn-success mt-3" id="add_link_btn">Add Link</div>
                    <br>
                    @error('gallery_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 
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

        $('#event_name').keyup(function() {
            $('#event_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
 
        $("#add_link_btn").on('click', function(){
            let data = `
                <div class="event_item mt-2">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="text" name="gallery_image[]" placeholder="http://..." class="form-control">
                        </div>
                        <div class="col-md-1 text-center">
                            <button type="button" class="btn btn-danger remove_btn">&times;</button>
                        </div>
                    </div>
                </div> 
            
            `;
        $(".add_event").append(data);
        })

        $(document).on('click', '.remove_btn', function(){
            $(this).closest(".event_item").remove();
        })
 
    </script>

@endsection
 
