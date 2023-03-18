@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">View Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('team.index') }}">team</a></li>
              <li class="breadcrumb-item active" aria-current="page">team View</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <tr>
                <th> Image</th>
                <td><img src={{url($team->image)}} width="300" alt=""></td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $team->name }}</td>
            </tr>

            <tr>
                <th>Title</th>
                <td>{{ $team->title }}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                        @if ($team->status == 0)
                            <span class="badge badge-warning">Deactive</span>
                        @else
                            <span class="badge badge-success">Active</span>
                        @endif
                    </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

