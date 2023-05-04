@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('training.index') }}">Training</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Training</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('training.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group mb-3">
                    <label>Training Title</label>
                    <input type="text" name="title" id="training_title" placeholder="Enter Service Title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>URL</label>
                    <input type="text" id="training_url" placeholder="URL" class="form-control mb-2">
                    @error('slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="slug" id="slug" placeholder="URL" class="form-control mb-2">


                <div class="form-group mb-3">
                    <label>Course Name</label>
                    <input type="text" name="course_name" placeholder="Enter  course name" class="form-control mb-2">
                    @error('course_name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Course duration</label>
                    <input type="text" name="duration" placeholder="Enter  course dureation" class="form-control mb-2">
                    @error('duration')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course Classes</label>
                    <input type="text" name="classes" placeholder="Enter  course dureation" class="form-control mb-2">
                    @error('classes')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Course pre requirement</label>
                    <input type="text" name="pre_requirement" placeholder="Enter  course pre_requirement" class="form-control mb-2">
                    @error('pre_requirement')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course system config</label>
                    <input type="text" name="system_config" placeholder="Enter  course system config" class="form-control mb-2">
                    @error('system_config')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course fee online</label>
                    <input type="text" name="course_fee_online" placeholder="Enter course fee online" class="form-control mb-2">
                    @error('course_fee_online')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course fee offline</label>
                    <input type="text" name="course_fee_offline" placeholder="Enter course fee offline" class="form-control mb-2">
                    @error('course_fee_offline')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Youtube Link</label>
                    <input type="text" name="youtube_link" placeholder="Enter Youtube Link" class="form-control mb-2">
                    @error('youtube_link')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Featured Image</label>
                    <img src="" alt="">
                    <input type="file" name="Featured_img" class="form-control">
                    @error('Featured_img')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group">
                    <label>Training Description</label>
                    <textarea name="description" id="" class="form-control" rows="5" cols="80">
                        This is my textarea to be replaced with CKEditor 4.
                    </textarea>
                    @error('description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <!-- SEO -->
                <div class="form-group mb-3">
                    <label>SEO TITLE</label>
                    <input type="text" name="seo_title"  placeholder="Seo Title" class="form-control mb-2">
                    @error('seo_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>SEO Description</label>
                    <textarea name="seo_description" class="form-control" cols="30" rows="2"></textarea>
                    @error('seo_description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Add Training">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('backend_footer_script')


    <script>
        $(document).ready(function() {

            // Slug
         $('#training_url').keyup(function() {
              $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });





        });
    </script>


@endsection
