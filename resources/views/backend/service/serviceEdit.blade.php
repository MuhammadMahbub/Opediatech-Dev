@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Add Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Service</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('service.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <input type="hidden" value="{{ $data->service_image }}" name="old_image">

                <div class="form-group mb-3">
                    <label>Service Title</label>
                    <input type="text" name="service_title" value="{{ $data->service_title }}" placeholder="Enter Service Title" class="form-control mb-2">
                    @error('service_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Service Category</label>
                    <select name="service_category_id" class="form-control">
                        @foreach ($service_categories as $category)
                            <option {{ $data->service_category_id == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->category_fname }} {{ $category->category_lname }}</option>
                        @endforeach
                    </select>
                    @error('service_category_id')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Service Description</label>
                    <textarea name="service_desc" class="form-control" cols="7" rows="">{{ $data->service_desc }}</textarea>
                    @error('service_desc')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Service Type</label>
                    <input type="text" class="form-control" value="{{ $data->service_type }}" name="service_type" placeholder="Service Type">
                    @error('service_type')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Platform Type</label>
                    <input type="text" class="form-control" value="{{ $data->platform_type }}" name="platform_type" placeholder="Platform Type">
                    @error('platform_type')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Operating System</label>
                    <input type="text" class="form-control" value="{{ $data->operating_system }}" name="operating_system" placeholder="Operating System">
                    @error('operating_system')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Comlepted Project</label>
                    <input type="text" class="form-control" value="{{ $data->project_complete }}" name="project_complete" placeholder="Project Complete">
                    @error('project_complete')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Work Experience</label>
                    <input type="text" class="form-control" value="{{ $data->work_experience }}" name="work_experience" placeholder="Work Experience">
                    @error('work_experience')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Total Clients</label>
                    <input type="text" class="form-control" value="{{ $data->total_clients }}" name="total_clients" placeholder="Enter Total Clients">
                    @error('total_clients')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Background Color Code (EXP:#0000)</label>
                    <input type="text" name="color_code" value="{{ $data->color_code }}" placeholder="#000" class="form-control mb-2">
                    @error('color_code')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Image</label>
                    <img  width="200px"  src="{{ asset($data->service_image) }}" id="img_id" alt="image">
                    <input type="file" name="service_image" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])" class="form-control">
                    @error('service_image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Service">
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
         $('#service_slug').keyup(function() {
              $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
        });
    </script>


@endsection









