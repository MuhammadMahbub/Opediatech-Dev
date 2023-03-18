@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">View Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('training.index') }}">Training</a></li>
              <li class="breadcrumb-item active" aria-current="page">Training View</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">


            <tr>
                <th>Service Title</th>
                <td>{{ $training->title }}</td>
            </tr>

            <tr>
                <th>course name</th>
                <td>{{ $training->course_name }}</td>
            </tr>
            <tr>
                <th>duration</th>
                <td>{{ $training->duration }}</td>
            </tr>
            <tr>
                <th>classes</th>
                <td>{{ $training->classes }}</td>
            </tr>
            <tr>
                <th>pre-requirement</th>
                <td>{{ $training->pre_requirement }}</td>
            </tr>
            <tr>
                <th>system config</th>
                <td>{{ $training->system_config }}</td>
            </tr>
            <tr>
                <th>course fee online</th>
                <td>{{ $training->course_fee_online }}</td>
            </tr>
            <tr>
                <th>course fee Offline</th>
                <td>{{ $training->course_fee_offline }}</td>
            </tr>
            <tr>
                <th>Video Link</th>
                <td>{{ $training->youtube_link }}</td>
            </tr>
            <tr>
                <th>Features Image</th>
                <td><img src={{url($training->Featured_img)}} width="300" alt=""></td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{!! $training->description !!}</td>
            </tr>
            <tr>
                <th>SEO Title</th>
                <td>{{ $training->seo_title }}</td>
            </tr>
            <tr>
                <th>SEO Description</th>
                <td>{{ $training->seo_description }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                        @if ($training->status == 0)
                            <span class="btn btn-warning">Pending</span>
                        @else
                            <span class="btn btn-primary">Published</span>
                        @endif
                    </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
