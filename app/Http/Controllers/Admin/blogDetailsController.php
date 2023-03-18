<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogDetails;
use App\Models\ServiceCategory;
use Image;
use Carbon\Carbon;

class blogDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogDetails::orderBy('id', 'desc')->get();
        return view('backend.blog_details.index', compact('blogs'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ServiceCategory::orderBy('id', 'desc')->get();

        return view("backend.blog_details.create", compact('data'));
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
            '*' => 'required'
        ]);

        // img setting
        $images = $request->file('blog_image');
        $img_ext = strtolower($images->getClientOriginalExtension());
        $hex_name = hexdec(uniqid());
        $img_name = $hex_name . '.' . $img_ext;
        $location = 'backend/assets/images/uploads/category/';
        $last_image = $location. $img_name;
        Image::make($images)->save($last_image);
        $data = new BlogDetails();
        $data->service_category_id = $request->service_category_id;
        $data->main_title = $request->main_title;
        $data->main_title_desc = $request->main_title_desc;
        $data->blog_title = $request->blog_title;
        $data->blog__title_desc = $request->blog__title_desc;
        $data->quote_title = $request->quote_title;
        $data->quote_desc = $request->quote_desc;
        $data->details_title = $request->details_title;
        $data->details_desc = $request->details_desc;
        $data->image = $last_image;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with("success", "Category Description Add Success");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = BlogDetails::findOrFail($id);
        $categorys = ServiceCategory::orderBy('id', 'desc')->get();
        return view('backend.blog_details.edit', compact('data', 'categorys'));
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
            '*' => 'required'
        ]);

        $images = $request->file('blog_image');

        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
             // img setting
            $images = $request->file('blog_image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/category/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = BlogDetails::findOrFail($id);
            $data->image = $last_image;
            $data->save();
        }


        $data = BlogDetails::findOrFail($id);
        $data->service_category_id = $request->service_category_id;
        $data->main_title = $request->main_title;
        $data->main_title_desc = $request->main_title_desc;
        $data->blog_title = $request->blog_title;
        $data->blog__title_desc = $request->blog__title_desc;
        $data->quote_title = $request->quote_title;
        $data->quote_desc = $request->quote_desc;
        $data->details_title = $request->details_title;
        $data->details_desc = $request->details_desc;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with("success", "Category Description Update Success");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = BlogDetails::findOrFail($id);
        if(file_exists($data->image)){
            unlink($data->image);
        }
        $data->delete();
        return response()->json();
    }
}
