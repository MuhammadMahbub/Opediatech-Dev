@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <div class="d-flex justify-content-between">
            <h4 class="m-t-0 header-title mr-0">Show All Service</h4>
            <a href="{{ route('service.create') }}" class="btn btn-primary">Add Service</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Service Category</th>
                    <th>Service Title</th>
                    <th>Service Desc</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $service->relationWithServiceCategory->category_fname }} {{ $service->relationWithServiceCategory->category_lname }}</td>
                    <td>{{ $service->service_title }}</td>
                    <td> {{  Illuminate\Support\Str::limit($service->service_desc, 20, '...read more' )  }}</td>
                    <td>{{ $service->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($service->status == 0)
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
                              <li><a class="dropdown-item" href="{{ route('service.show', $service->id) }}">View</a></li>
                              <li><a class="dropdown-item" href="{{ route('service.edit', $service->id) }}">Edit</a></li>
                              <li><a class="dropdown-item commonDeleteId servicesDeleteId" data-id="{{ $service->id }}">Delete</a></li>
                              <li>
                                @if ($service->status == 0)
                                    <a class="dropdown-item"  href="{{ route('service.published', $service->id) }}">Published</a>
                                @else
                                    <a class="dropdown-item"  href="{{ route('service.pending', $service->id) }}">Pending</a>
                                @endif
                                </li>

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

    $('.servicesDeleteId').click(function(){
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
                        url: '/service/delete/'+id,
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
