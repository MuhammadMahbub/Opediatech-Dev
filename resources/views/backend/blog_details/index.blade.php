@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All Blog </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Category</th>
                    <th>Main Title</th>
                    <th>Main Title Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $blog->Category->category_fname." ".$blog->Category->category_lname  }}</td>
                    <td>{{ $blog->main_title }}</td>
                    <td>{{ Illuminate\Support\Str::limit($blog->main_title_desc, 20, '...Read Mode') }}</td>
                    <td><img src={{ $blog->image }} width="150" alt=""></td>
                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('blogDetails.edit', $blog->id) }}">Edit</a></li> 
                                <li><a class="dropdown-item commonDeleteId blogDeleteId" data-id="{{ $blog->id }}">Delete</a></li>
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
    $('.blogDeleteId').click(function(){
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
                        url: '/blog_details/delete/'+id,
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
