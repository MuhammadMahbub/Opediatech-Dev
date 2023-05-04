@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Edit Portfolio</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('portfolio.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $data->thambnail_image }}" name="old_image">
                <div class="form-group mb-3">
                    <select name="category_id" class="form-control">
                        <option>--Choose Category---</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id == $data->category_id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Portfolio Title</label>
                    <input type="text" name="portfolio_title" value="{{ $data->portfolio_title }}"  placeholder="Enter Category Title" class="form-control mb-2">
                    @error('portfolio_title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Portfolio Image</label><br>
                    <img  width="200px" id="img_id" src="{{ asset($data->thambnail_image) }}" alt="">
                    <input type="file" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])"  name="thambnail_image" class="form-control">
                    @error('thambnail_image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label>Project Name</label>
                    <input type="text" name="project_name" value="{{ $data->project_name }}" placeholder="Enter Poject Name" class="form-control mb-2">
                    @error('project_name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Client Name</label>
                    <input type="text" name="project_client" value="{{ $data->project_client }}" placeholder="Enter Client Name" class="form-control mb-2">
                    @error('project_client')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Project Mode</label>
                    <input type="text" name="project_mode" value="{{ $data->project_mode }}"  placeholder="Enter Poject Mode" class="form-control mb-2">
                    @error('project_mode')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Client Location</label>
                    <input type="text" name="location" value="{{ $data->location }}" placeholder="Enter Poject Mode" class="form-control mb-2">
                    @error('location')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Facebook Link</label>
                    <input type="text" name="fbLink" value="{{ $data->fbLink }}" placeholder="http://..." class="form-control mb-2">
                    @error('fbLink')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Site Link</label>
                    <input type="text" name="twLink" value="{{ $data->twLink }}" placeholder="http://..." class="form-control mb-2">
                    @error('twLink')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>LinkedIn Link</label>
                    <input type="text" name="inLink" value="{{ $data->inLink }}" placeholder="http://..." class="form-control mb-2">
                    @error('inLink')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Instagram Link</label>
                    <input type="text" name="insLink" value="{{ $data->insLink }}" placeholder="http://..." class="form-control mb-2">
                    @error('insLink')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Service Description</label>
                    <textarea name="portfolio_desc" id="" cols="30" rows="10">{!! $data->portfolio_desc !!}</textarea>
                    @error('service_desc')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Portfolio">
                </div>
            </form>
        </div>
    </div>



</div>
@endsection

 


