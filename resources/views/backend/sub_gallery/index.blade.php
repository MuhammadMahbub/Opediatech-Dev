@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <div class="d-flex justify-content-between">
            <h4 class="m-t-0 header-title mr-0">Show All </h4>
            <a href="{{ route('sub_gallery.create') }}" class="btn btn-primary">Add Sub Gallery</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Sub Gallery</li>
            </ol>
        </nav>
        <div class="row">
        @foreach ($sub_galleries as $sub_gallery)
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="{{ route('sub_gallery.show', $sub_gallery->id) }}">
                    <img src="{{ asset($sub_gallery->thumbnail_image) }}" alt="" width="98%" height="200px">
                    <h3 class="mt-3">{{ Str::headline($sub_gallery->title ?? '') }} </h3>
                    <h5 class="text-danger">({{ $sub_gallery->relationWithGallery->event_name }})</h5><br>
                </a>
                {{-- <p>{!! $sub_gallery->description !!}</p> --}}
            </div>
            <a href="{{route('sub_gallery.edit', $sub_gallery->id)}}" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaldemo8__{{$sub_gallery->id}}">Delete</a>
        </div>
        
        <!-- MODAL Delete EFFECTS -->
        <div class="modal fade" id="modaldemo8__{{$sub_gallery->id}}">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="card-body text-center">
                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                        <h4 class="h4 mb-0 mt-3">Warning</h4>
                        <p class="card-text">Are you sure you want to delete data?</p>
                        <strong class="card-text text-red">Once deleted, you will not be able to recover this data!</strong>
                    </div>
                    <div class="card-footer text-center border-0 pt-0">
                        <div class="row">
                            <div class="text-center m-auto mt-1">
                                <a href="javascript:void(0)" class="btn btn-white me-2" data-bs-dismiss="modal">Cancel</a>
                                <a href="{{ route('sub_gallery.delete', $sub_gallery->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         @endforeach
        </div>
    </div>
</div>
@endsection


