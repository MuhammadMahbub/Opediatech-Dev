@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <div class="d-flex justify-content-between">
            <h4 class="m-t-0 header-title mr-0">Show All Categories</h4>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
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
                    <th>Category Name</th>
                    <th>Category title</th>
                    <th>Category img</th>
                    <th>Is Featured</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $category->category_name }} <span style="color:red">({{ $category->relationWithPortfolio->count() }})</span></td>
                    <td>{{ $category->title }}</td>
                    <td><img src={{ asset($category->img) }} width="150" alt=""></td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                      <td> <a href={{route('isFeatured',$category->id)}} class="{{$category->isFeatured==1 ? 'btn btn-primary' : 'btn btn-warning'}}">  {{$category->isFeatured==1 ? 'Featured' : 'Not Featured'}} </a> </td>
                    <td class="text-center">

                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{ route('category.edit', $category->id) }}">Edit</a></li>
                              <li><a class="dropdown-item commonDeleteId categoryDeleteId" data-id="{{ $category->id }}">Delete</a></li>
                              
                                  
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
    $('.categoryDeleteId').click(function(){
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
                        url: '/category/delete/'+id,
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
