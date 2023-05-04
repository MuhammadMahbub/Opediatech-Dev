@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Update team</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('team.index') }}">team</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update team</li>
            </ol>
        </nav>
        <div class="card-box">
            <form action="{{ route('team.update', $data->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <input type="text" name="old_image" value="{{ $data->image }}">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name"  value="{{ $data->name }}" class="form-control mb-2">
                    @error('name')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" name="title"  value="{{ $data->title }}" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Image</label>
                    <br>
                    <img src="{{ asset($data->image) }}" id="img_id" width="200px" class="mb-3" alt="image">
                    <input type="file" name="image" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])" class="form-control">
                    @error('image')
                        <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center" style="margin-top: 30px">
                    <input type="submit" class="btn btn-success" style="background: #02c0ce" value="Update Team">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
