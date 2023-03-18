@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">View Portfolio</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
              <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered">
            <tr>
                <th>Portfolio Title</th>
                <td>{{ $portfolio->portfolio_title }}</td>
            </tr>
            <tr>
                <th>Category Name</th>
                <td>{{ $portfolio->relationWithCategory->category_name }}</td>
            </tr>
            <tr>
                <th>Project Name</th>
                <td>{!! $portfolio->project_name !!}</td>
            </tr>

            <tr>
                <th>Client Name</th>
                <td>{!! $portfolio->project_client !!}</td>
            </tr>

            <tr>
                <th>Project Mode</th>
                <td>{!! $portfolio->project_mode !!}</td>
            </tr>

            <tr>
                <th>Location</th>
                <td>{!! $portfolio->location !!}</td>
            </tr>

            <tr>
                <th>Facebook Link</th>
                <td>{!! $portfolio->fbLink !!}</td>
            </tr>

            <tr>
                <th>Visit Link</th>
                <td>{!! $portfolio->twLink !!}</td>
            </tr>
            <tr>
                <th>LinkedIn Link</th>
                <td>{!! $portfolio->inLink !!}</td>
            </tr>
            <tr>
                <th>Instagram Link</th>
                <td>{!! $portfolio->insLink !!}</td>
            </tr>
            <tr>
                <th>Portfolio Thumbnail Image</th>
                <td><img width="300" src="{{ asset($portfolio->thambnail_image) }}" alt=""></td>
            </tr>
            <tr>
                <th>Portfolio Description</th>
                <td>{!! $portfolio->portfolio_desc !!}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection










