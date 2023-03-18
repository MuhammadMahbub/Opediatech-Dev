@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All Training </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Training</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th> Title</th>
                    <th> course name</th>
                    <th> course duration</th>
                    <th> course classes</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trainings as $training)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $training->title }}</td>
                    <td>{{ $training->course_name }}</td>
                    <td>{{ $training->duration }}</td>
                    <td>{{ $training->classes }}</td>

                    <td>{{ $training->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($training->status == 0)
                            <span class="btn btn-warning">Pending</span>
                        @else
                            <span class="btn btn-primary">Published</span>
                        @endif
                    </td>
                    <td class="text-center">

                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{ route('training.show', $training->id) }}">View</a></li>
                              <li><a class="dropdown-item" href="{{ route('training.edit', $training->id) }}">Edit</a></li>
                              <li><a class="dropdown-item commonDeleteId trainingsDeleteId" data-id="{{ $training->id }}">Delete</a></li>
                              {{-- <li>
                                @if ($training->status == 0)
                                    <a class="dropdown-item"  href="{{ route('training.published', $training->id) }}">Published</a>
                                @else
                                    <a class="dropdown-item"  href="{{ route('training.pending', $training->id) }}">Pending</a>
                                @endif
                                </li> --}}
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

    $('.trainingsDeleteId').click(function(){
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
                        url: 'training/delete/'+id,
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
