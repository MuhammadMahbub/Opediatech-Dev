@extends('layouts.backend.app')
@section('content')


<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All Category </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>
          <table id="selection-datatable" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>SL.NO</th>
                    <th>Service Category Name</th>
                    <th>SEO Title</th>
                    <th>SEO Description</th>
                    <th>Service Category Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($servicesCategorys as $category)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $category->category_fname }} {{ $category->category_lname }} <span style="color:red">({{ $category->relationWithService->count() }})</span></td>
                    <td>{{ $category->seo_title }}</td>
                    <td>{{ $category->seo_description }}</td>
                    <td><img width="200px" src="{{ asset($category->image) }}" alt="category_image"></td>

                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{ route('serviceCategory.edit', $category->id) }}">Edit</a></li>
                              <li><a class="dropdown-item commonDeleteId serviceCategoryDeleteId" data-id="{{ $category->id }}">Delete</a></li>
                            </ul>
                          </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <span style="color:red; font-size:20px; font-weight:700" >Data not found</span>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('backend_footer_script')
<script type="text/javascript">
    $('.serviceCategoryDeleteId').click(function(){
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
                        url: '/service/category/delete/'+id,
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
