@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All Email </h4>
          <table id="selection-datatable" class="table table-bordered text-center">
            <form action="{{ route('sendAllemail') }}" method="POST">
               @csrf

                    <tr>
                        <th>SL.NO</th>
                        <th>
                            <button type="submit" class="btn btn-primary">send all</button>
                        </th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>


                    @forelse ($emails as $email)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>
                            <input type="checkbox" name="email[]" value="{{ $email->id }}">
                        </td>
                        <td>{{ $email->email }}</td>
                        <td>{{ $email->created_at->diffForHumans() }}</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="{{ route('mail.send', $email->id) }}">Send</a></li>
                                  <li><a data-id="{{ $email->id }}" class="dropdown-item commonDeleteId emailDeleteId" >Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <span>Data not found</span>
                    </tr>
                    @endforelse

            </form>
        </table>
    </div>
</div>
@endsection

@section('backend_footer_script')

    <script type="text/javascript">



    $('.emailDeleteId').click(function(){
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
                        url: '/email/delete/'+id,
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
