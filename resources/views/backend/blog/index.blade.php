@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <div class="d-flex justify-content-between">
            <h4 class="m-t-0 header-title mr-0">Show All </h4>
            <a href="{{ route('blog.create') }}" class="btn btn-primary">Add Blog</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Blog Title</th>
                    <th>Blog Slug</th>
                    <th>Blog Description</th>
                    <th>Blog img</th>
                    <th>Create Time </th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $blog->blog_title }}</td>
                    <td>{{ $blog->blog_slug }}</td>
                    <td>{{ Illuminate\Support\Str::limit($blog->blog_desc, 20, '...Read Mode') }}</td>
                    <td><img src={{ $blog->blog_image }} width="150" alt=""></td>
                    <td>{{ $blog->created_at->format('jS M, Y') }}</td> 

                    <td>
                        @if ($blog->status == 1)
                            <span class="btn btn-success">active</span>
                        @else
                            <span class="btn btn-danger">Inactive</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('blog.edit', $blog->id) }}">Edit</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}">View</a></li>
                                <li>
                                    @if ($blog->status == 0)
                                      <a href="{{ route('blog.active', $blog->id) }}" class="dropdown-item commonDeleteId">Active</a>
                                    @else
                                      <a href="{{ route('blog.deactive', $blog->id) }}" class="dropdown-item commonDeleteId">Deactive</a>
                                    @endif
                                  </li>
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
                        url: '/blog/delete/'+id,
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
