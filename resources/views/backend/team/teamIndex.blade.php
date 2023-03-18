@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All Team member </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">team</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teams as $team)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><img src={{ $team->image }}  width="100px" alt="image"></td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->title }}</td>
                    <td>
                        @if ($team->status == 0)
                            <span class="btn btn-warning">Deactive</span>
                        @else
                            <span class="btn btn-primary">Active</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{ route('team.show', $team->id) }}">View</a></li>
                              <li><a class="dropdown-item" href="{{ route('team.edit', $team->id) }}">Edit</a></li>
                              <li>
                                  @if ($team->status == 0)
                                    <a href="{{ route('team.active', $team->id) }}" class="dropdown-item commonDeleteId"  >Active</a>
                                  @else
                                    <a href="{{ route('team.deactive', $team->id) }}" class="dropdown-item commonDeleteId" data-id="{{ $team->id }}">Deactive</a>
                                  @endif

                                </li>
                              <li><a class="dropdown-item commonDeleteId teamsDeleteId" data-id="{{ $team->id }}">Delete</a></li>
                            </ul>
                          </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <span>Data not found</span>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('backend_footer_script')

<script type="text/javascript">
    $('.teamsDeleteId').click(function(){
            let id = $(this).attr('data-id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                    });
                    $.ajax({
                        type:'GET',
                        url: '/team/delete/'+id,
                        dataType: 'json',
                        success: function(data){
                            window.location.reload(true);
                        },
                        error: function(data){
                            console.log(data);
                        }
                    })
                } else {
                    swal("Your imaginary file is safe!");
                }
                });
        });
    </script>
@endsection
