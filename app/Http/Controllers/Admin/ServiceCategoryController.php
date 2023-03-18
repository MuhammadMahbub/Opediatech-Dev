<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesCategorys = ServiceCategory::all();
        return view('backend.serviceCategory.serviceCategoryIndex', compact('servicesCategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.serviceCategory.createServiceCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
          'category_fname' => 'required',
          'category_lname' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          'category_slug' => 'required',
         // 'path.*' => 'required|mimes:avi,mp4,.mov,wmv',

      ], [
          'category_fname.required' => 'The service category First name field is required.',
          'category_lname.required' => 'The service category Last name field is required.',
          'image.required' => 'The service category Image field is required.',
          'category_slug.required' => 'The service category slug field is required.',
      ]);


        $file_name = $_FILES['image']['name'];
        $file_tmp_name = $_FILES['image']['tmp_name'];
        $file_ext = explode('.', $file_name);
        $fileActExt = strtolower(end($file_ext));
        $allow = array('jpg', 'png', 'gif', 'jpeg');
        if(in_array($fileActExt, $allow)){
            $last_image = 'backend/assets/images/uploads/Service_category/'.$file_name;
            move_uploaded_file($file_tmp_name, $last_image );
        }else {
            return redirect()->back()->with("fail", "You can't upload files of this type !");
        }


        ServiceCategory::insert([
            'image' => $last_image,
            'category_fname' => $request->category_fname,
            'category_lname' => $request->category_lname,
            'category_slug' => $request->category_slug,
            'seo_description' => $request->seo_description,
            'seo_title' => $request->seo_title,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Services Category Success');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ServiceCategory::findOrFail($id);
        return view('backend.serviceCategory.serviceCategoryEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'category_fname' => 'required',
            'category_lname' => 'required',
            'category_slug' => 'required',

        ], [
            'category_fname.required' => 'The service category First name field is required.',
            'category_lname.required' => 'The service category Last name field is required.',
            'category_slug.required' => 'The service category slug field is required.',
        ]);


        if($request->hasFile('image')){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }

            $file_name = $_FILES['image']['name'];
            $file_tmp_name = $_FILES['image']['tmp_name'];
            $file_ext = explode('.', $file_name);
            $fileActExt = strtolower(end($file_ext));
            $allow = array('jpg', 'png', 'gif', 'jpeg');
            if(in_array($fileActExt, $allow)){
                $last_image = 'backend/assets/images/uploads/Service_category/'.$file_name;
                move_uploaded_file($file_tmp_name, $last_image );
            }else {
                return redirect()->back()->with("fail", "You can't upload files of this type !");
            }

            // insert
            ServiceCategory::findOrFail($id)->update([
                'image' => $last_image
            ]);

        }
        $data = ServiceCategory::findOrFail($id);
        $data->category_fname = $request->category_fname;
        $data->category_lname = $request->category_lname;
        $data->seo_description = $request->seo_description;
        $data->seo_title = $request->seo_title;
        $data->category_slug =  $request->category_slug;
        $data->updated_at = Carbon::now();
        $data->save();


        // update data
        return redirect()->back()->with('success', 'Services Update Success');


    }

    public function serviceCategoryDelete($id)
    {
        $count = service::where('service_category_id', $id)->count();
        $data = ServiceCategory::findOrFail($id);
        if(file_exists($data->image)){
            unlink($data->image);
        }
        if($count > 0){
            return response()->json();
        }else {
            ServiceCategory::findOrFail($id)->delete();
            return response()->json();
        }


    }
}
