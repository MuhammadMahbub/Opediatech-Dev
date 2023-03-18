@extends('layouts.backend.app')
@section('content')
<div class="row">
   <div class="col-md-10 m-auto">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('message.index') }}">Message</a></li>
              <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
          </nav>
        <table id="selection-datatable" class="table table-bordered ">
            <tr>
                <th>Name</th>
                <td>{{ $single_info->fname }} {{ $single_info->lname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $single_info->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $single_info->phone }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $single_info->message }}</td>
            </tr>

        </table>
    </div>
   </div>
</div>
@endsection

