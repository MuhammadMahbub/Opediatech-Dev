@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">View Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service View</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">

            <tr>
                <th>Feature Image</th>
                <td><img width="300" src="{{ asset($service->service_image) }}" alt=""></td>
            </tr>

            <tr>
                <th>Service Title</th>
                <td>{{ $service->service_title }}</td>
            </tr>


            <tr>
                <th>Service Category</th>
                <td>{{ $service->relationWithServiceCategory->category_fname }} {{ $service->relationWithServiceCategory->category_lname }}</td>
            </tr>

            <tr>
                <th>Service Description</th>
                <td>{!! $service->service_desc !!}</td>
            </tr>
   
            <tr>
                <th>Service Type</th>
                <td>{{ $service->service_type }}</td>
            </tr>
            <tr>
                <th>Platform Type</th>
                <td>{{ $service->platform_type }}</td>
            </tr>
            <tr>
                <th>Perating System</th>
                <td>{{ $service->operating_system }}</td>
            </tr>
            <tr>
                <th>Project Complete</th>
                <td>{{ $service->project_complete }}</td>
            </tr>
            <tr>
                <th>Total Clients</th>
                <td>{{ $service->total_clients }}</td>
            </tr>
            <tr>
                <th>Work Experience</th>
                <td>{{ $service->work_experience }}</td>
            </tr>
            <tr>
                <th>Color Code</th>
                <td>{{ $service->color_code }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if ($service->status == 0)
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






