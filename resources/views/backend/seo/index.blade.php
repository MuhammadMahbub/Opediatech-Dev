@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title">Show All </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Gallery</a></li> 
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="gallery_body"> 
            <div class="card p-3">
                <form action="{{ route('seo_update', $seo->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <h3>Home Page</h3>
                   <div class="form-group">
                        <label>Home Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="home_page_seo_title" id="" class="form-control" value="{{$seo->home_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                    @error('home_page_seo_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label>Home Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="home_page_seo_description" class="form-control" rows="4"> {{ $seo->home_page_seo_description }} </textarea>
                   </div>
                   @error('home_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Home Page Seo Keywords</label>
                        <input type="text" name="home_page_seo_keywords" id="" class="form-control" value="{{$seo->home_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Work Page</h3>
                   <div class="form-group">
                        <label>Work Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="work_page_seo_title" id="" class="form-control" value="{{$seo->work_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('work_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Work Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="work_page_seo_description" class="form-control" rows="4"> {{ $seo->work_page_seo_description }} </textarea>
                   </div>
                   @error('work_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Work Page Seo Keywords</label>
                        <input type="text" name="work_page_seo_keywords" id="" class="form-control" value="{{$seo->work_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Agency Page</h3>
                   <div class="form-group">
                        <label>Agency Page Seo Title</label>
                        <input type="text" name="agency_page_seo_title" id="" class="form-control" value="{{$seo->agency_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                    <div class="form-group">
                        <label>Agency Page Seo Description</label>
                        <textarea name="agency_page_seo_description" class="form-control" rows="4"> {{ $seo->agency_page_seo_description }} </textarea>
                   </div>
                    <div class="form-group">
                        <label>Agency Page Seo Keywords</label>
                        <input type="text" name="agency_page_seo_keywords" id="" class="form-control" value="{{$seo->agency_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Blog Page</h3>
                   <div class="form-group">
                        <label>Blog Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="blog_page_seo_title" id="" class="form-control" value="{{$seo->blog_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('blog_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Blog Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="blog_page_seo_description" class="form-control" rows="4"> {{ $seo->blog_page_seo_description }} </textarea>
                   </div>
                   @error('blog_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Blog Page Seo Keywords</label>
                        <input type="text" name="blog_page_seo_keywords" id="" class="form-control" value="{{$seo->blog_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Service Page</h3>
                   <div class="form-group">
                        <label>Service Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="service_page_seo_title" id="" class="form-control" value="{{$seo->service_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('service_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Service Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="service_page_seo_description" class="form-control" rows="4"> {{ $seo->service_page_seo_description }} </textarea>
                   </div>
                   @error('service_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Service Page Seo Keywords</label>
                        <input type="text" name="service_page_seo_keywords" id="" class="form-control" value="{{$seo->service_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Gallery Page</h3>
                   <div class="form-group">
                        <label>Gallery Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="gallery_page_seo_title" id="" class="form-control" value="{{$seo->gallery_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('gallery_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Gallery Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="gallery_page_seo_description" class="form-control" rows="4"> {{ $seo->gallery_page_seo_description }} </textarea>
                   </div>
                   @error('gallery_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Gallery Page Seo Keywords</label>
                        <input type="text" name="gallery_page_seo_keywords" id="" class="form-control" value="{{$seo->gallery_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Career Page</h3>
                   <div class="form-group">
                        <label>Career Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="career_page_seo_title" id="" class="form-control" value="{{$seo->career_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('career_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Career Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="career_page_seo_description" class="form-control" rows="4"> {{ $seo->career_page_seo_description }} </textarea>
                   </div>
                   @error('career_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Career Page Seo Keywords</label>
                        <input type="text" name="career_page_seo_keywords" id="" class="form-control" value="{{$seo->career_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Contact Page</h3>
                   <div class="form-group">
                        <label>Contact Page Seo Title<span class="text-danger">*</span></label>
                        <input type="text" name="contact_page_seo_title" id="" class="form-control" value="{{$seo->contact_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                   @error('contact_page_seo_title')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Contact Page Seo Description<span class="text-danger">*</span></label>
                        <textarea name="contact_page_seo_description" class="form-control" rows="4"> {{ $seo->contact_page_seo_description }} </textarea>
                   </div>
                   @error('contact_page_seo_description')
                       <span class="text-danger">{{ $message }}</span>
                   @enderror
                    <div class="form-group">
                        <label>Contact Page Seo Keywords</label>
                        <input type="text" name="contact_page_seo_keywords" id="" class="form-control" value="{{$seo->contact_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Team Page</h3>
                   <div class="form-group">
                        <label>Team Page Seo Title</label>
                        <input type="text" name="team_page_seo_title" id="" class="form-control" value="{{$seo->team_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                    <div class="form-group">
                        <label>Team Page Seo Description</label>
                        <textarea name="team_page_seo_description" class="form-control" rows="4"> {{ $seo->team_page_seo_description }} </textarea>
                   </div>
                    <div class="form-group">
                        <label>Team Page Seo Keywords</label>
                        <input type="text" name="team_page_seo_keywords" id="" class="form-control" value="{{$seo->team_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                   <h3>Training Page</h3>
                   <div class="form-group">
                        <label>Training Page Seo Title</label>
                        <input type="text" name="training_page_seo_title" id="" class="form-control" value="{{$seo->training_page_seo_title}}" placeholder="Example:Employee of the month">
                   </div>
                    <div class="form-group">
                        <label>Training Page Seo Description</label>
                        <textarea name="training_page_seo_description" class="form-control" rows="4"> {{ $seo->training_page_seo_description }} </textarea>
                   </div>
                    <div class="form-group">
                        <label>Training Page Seo Keywords</label>
                        <input type="text" name="training_page_seo_keywords" id="" class="form-control" value="{{$seo->training_page_seo_keywords}}" placeholder="Example:Employee of the month">
                   </div>

                    <center>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Update</button>
                   </center>

            </form>
        </div>
       
    </div>
</div>
@endsection

@section('backend_footer_script')

    <script>

       

        
    </script>

@endsection
 
