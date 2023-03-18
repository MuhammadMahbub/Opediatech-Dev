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
            <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>Service Title</label>
                    <input type="text" name="service_title" value="{{ old('service_title') }}" placeholder="Enter Service Title" class="form-control mb-2">
                    @error('service_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Service Category</label>
                    <select name="service_category_id" class="form-control">
                        @foreach ($service_categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_fname }} {{ $category->category_lname }}</option>
                        @endforeach
                    </select>
                    @error('service_category_id')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Service Description</label>
                    <textarea name="service_desc" class="form-control" cols="7" rows="">{{ old('service_desc') }}</textarea>
                    @error('service_desc')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Service Type</label>
                    <input type="text" class="form-control" value="{{ old('service_type') }}" name="service_type" placeholder="Service Type">
                    @error('service_type')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Platform Type</label>
                    <input type="text" class="form-control" value="{{ old('platform_type') }}" name="platform_type" placeholder="Platform Type">
                    @error('platform_type')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Operating System</label>
                    <input type="text" class="form-control" value="{{ old('operating_system') }}" name="operating_system" placeholder="Operating System">
                    @error('operating_system')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Comlepted Project</label>
                    <input type="text" class="form-control" value="{{ old('project_complete') }}" name="project_complete" placeholder="Project Complete">
                    @error('project_complete')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Work Experience</label>
                    <input type="text" class="form-control" value="{{ old('work_experience') }}" name="work_experience" placeholder="Work Experience">
                    @error('work_experience')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Total Clients</label>
                    <input type="text" class="form-control" value="{{ old('total_clients') }}" name="total_clients" placeholder="Enter Total Clients">
                    @error('total_clients')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


    

                <div class="form-group mb-3">
                    <label>Background Color Code (EXP:#0000)</label>
                    <input type="text" name="color_code" value="{{ old('color_code') }}" placeholder="#000" class="form-control mb-2">
                    @error('color_code')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Image</label>
                    <input type="file" name="service_image" class="form-control">
                    @error('service_image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Add Service">
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
