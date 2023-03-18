@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse (message() as $message)
                <tr @if ($message->view_status == 0)
                    style="color:#02c0ce"
                @endif>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $message->fname }} {{  $message->lname }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($message->status == 0)
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
                              <li><a href="{{ route('message.view', $message->id) }}" class="dropdown-item">View</a></li>
                              <li><a  data-id="{{ $message->id }}" class="dropdown-item commonDeleteId messageDeleteId" >Delete</a></li>
                              <li>
                                @if ($message->status == 0)
                                    <a class="dropdown-item" href="{{ route('message.published', $message->id) }}">Published</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('message.pending', $message->id) }}">Pending</a>
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
    $('.messageDeleteId').click(function(){
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
                        url: 'message/delete/'+id,
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
