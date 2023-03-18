@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('training.index') }}">Training</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Training</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('training.update', $training->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $training->Featured_img }}" name="old_image">
                <div class="form-group mb-3">
                    <label>Training Title</label>
                    <input type="text" value="{{$training->title}}" name="title" id="training_title" placeholder="Enter Service Title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>URL</label>
                    <input type="text" value="{{$training->slug}}"  id="training_url" placeholder="URL" class="form-control mb-2">
                    @error('slug')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                  <input type="hidden" value="{{$training->slug}}" name="slug" id="slug" placeholder="URL" class="form-control mb-2">

                <div class="form-group mb-3">
                    <label>Course Name</label>
                    <input type="text" value="{{$training->course_name}}" name="course_name" placeholder="Enter  course name" class="form-control mb-2">
                    @error('course_name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course duration</label>
                    <input type="text" name="duration"  value="{{$training->duration}}" placeholder="Enter  course dureation" class="form-control mb-2">
                    @error('duration')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course Classes</label>
                    <input type="text" name="classes" value="{{$training->classes}}" placeholder="Enter  course dureation" class="form-control mb-2">
                    @error('classes')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Course pre requirement</label>
                    <input type="text" name="pre_requirement" value="{{$training->pre_requirement}}" placeholder="Enter  course pre_requirement" class="form-control mb-2">
                    @error('pre_requirement')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course system config</label>
                    <input type="text" name="system_config" value="{{$training->system_config}}" placeholder="Enter  course system config" class="form-control mb-2">
                    @error('system_config')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course fee online</label>
                    <input type="text" name="course_fee_online" value="{{$training->course_fee_online}}" placeholder="Enter course fee online" class="form-control mb-2">
                    @error('course_fee_online')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Course fee offline</label>
                    <input type="text" name="course_fee_offline" value="{{$training->course_fee_offline}}" placeholder="Enter course fee offline" class="form-control mb-2">
                    @error('course_fee_offline')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Youtube Link</label>
                    <input type="text" name="youtube_link" value="{{$training->youtube_link}}" placeholder="Enter Youtube Link" class="form-control mb-2">
                    @error('youtube_link')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group mb-3">
                    <label>Featured Image</label><br>
                    <img  width="200px" id="training_img" src="{{ asset($training->Featured_img) }}" alt="">
                    <input type="file" name="Featured_img" onchange="document.getElementById('training_img').src=window.URL.createObjectURL(this.files[0])"   class="form-control">
                    @error('Featured_img')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-group">
                    <label>Training Description</label>
                    <textarea name="description" id="editor" cols="30" rows="10">{!!$training->description!!}</textarea>
                    @error('description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <select name="status" class="form-control" id="">
                        <option value="#">Status</option>
                        <option {{$training->status ==0 ? 'selected': ''}} value='0'>Pending</option>
                        <option {{$training->status == 1 ? 'selected': ''}} value='1'>Published</option>
                    </select>
                    @error('description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <!-- SEO -->
                <div class="form-group mb-3">
                    <label>SEO TITLE</label>
                    <input type="text" name="seo_title" value="{{ $training->seo_title }}" placeholder="Seo Title" class="form-control mb-2">
                    @error('seo_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>SEO Description</label>

                    <textarea name="seo_description" class="form-control" cols="30" rows="2" > {{$training->seo_description}}</textarea>
                    @error('seo_description')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>



                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Training">
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
