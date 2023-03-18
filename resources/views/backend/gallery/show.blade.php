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
        <h3>{{ $gallery->event_name ?? ''}}</h3> <br>
        <div class="mb-3">
            <label for="">Thumbnail</label><br>
            <img src="{{ asset($gallery->event_image) }}" alt="" height="200px">
        </div>
        <h5>Gallery</h5>
        <div class="row">
            @php
                $images = json_decode($gallery->gallery_image);
            @endphp
            @foreach ($images as $image)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $image }}" alt=""> 
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</div>
@endsection
