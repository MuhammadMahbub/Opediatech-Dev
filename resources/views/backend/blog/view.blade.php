@extends('layouts.backend.app')
@section('content')
<style>
    .data_time strong {
        font-size: 20px;
        margin: 15px 0px;
        display: block;
    }
    .blog_details {
        width: 1044px;
        margin: auto;
    }

    .para p {
        text-align: justify;
        font-size: 18px;
    }
</style>
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">View</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog.index') }}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog View</li>
            </ol>
        </nav>

        <div class="blog_details">
            <img src="{{ asset($data->blog_image) }}" alt="imag">
            <div class="data_time">
                <strong>{{ $data->created_at->format('jS M, Y') }}</strong>
            </div>
            <div class="para">
                <p>{{ $data->blog_desc }}</p>
            </div>
        </div>
    </div>
</div>
@endsection


