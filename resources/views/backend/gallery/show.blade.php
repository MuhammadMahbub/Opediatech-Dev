@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
        <h3>{{ $gallery->event_name ?? ''}}</h3>
        <p>{!! $gallery->event_desc ?? '' !!}</p>
        <div class="mb-3">
            <label for="">Thumbnail</label><br>
            <img src="{{ asset($gallery->event_image) }}" alt="" height="200px">
        </div>
        <hr>
        <h4>Sub Gallery</h4>
        <div class="row">
            @foreach ($gallery->relationWithSubGallery as $subGallery)
            <div class="col-md-3">
                <a href="{{ route('sub_gallery.show', $subGallery->id) }}">
                    <h3>{{ Str::headline($subGallery->title) ?? ''}}</h3>
                    <div class="mb-3">
                        <img src="{{ asset($subGallery->thumbnail_image) }}" alt="" width="200px">
                    </div>
                </a> 
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
