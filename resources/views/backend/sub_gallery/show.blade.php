@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('sub_gallery.index') }}">Sub Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
        <h4 class="text-danger">{{ $subGallery->relationWithGallery->event_name ?? ''}}</h4>
        <h3>{{ Str::headline($subGallery->title ?? '')}}</h3>
        <p>{!! $subGallery->description !!}</p>
        <div class="mb-3">
            <label for="">Thumbnail</label><br>
            <img src="{{ asset($subGallery->thumbnail_image) }}" alt="" width="300px">
        </div>
        <h5>All Images</h5>
        <div class="row">
            @forelse ($subGallery->relationWithImages as $image)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($image->image) }}" alt=""> 
                </div>
            </div> 
            @empty
            <div class="text-danger ml-3">No Images Available</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
