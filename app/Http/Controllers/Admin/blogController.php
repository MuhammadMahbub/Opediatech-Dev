<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

use Image;
use Carbon\Carbon;


class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::orderBy('id', 'desc')->get();
        return view('backend.blog.index', compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
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
        ],[
            'blog_title.required' => 'Blog title is required',
            'blog_slug.required' => 'Blog slug is required',
            'blog_desc.required' => 'Blog Description is required',
            'blog_image.required' => 'Blog image is required'
        ]);



        // img setting
        $images = $request->file('blog_image');
        $img_ext = strtolower($images->getClientOriginalExtension());
        $hex_name = hexdec(uniqid());
        $img_name = $hex_name . '.' . $img_ext;
        $location = 'backend/assets/images/uploads/blog/';
        $last_image = $location. $img_name;
        Image::make($images)->save($last_image);


         // insert data
         $data = new blog();
         $data->blog_title = $request->blog_title;
         $data->blog_slug = $request->blog_slug;
         $data->blog_desc = $request->blog_desc;
         $data->blog_image = $last_image;
         $data->created_at = Carbon::now();
         $data->save();
         return redirect()->back()->with('success', 'Blog add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = blog::findOrFail($id);
        return view('backend.blog.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = blog::findOrFail($id);
        return view('backend.blog.edit', compact('data'));
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
        ],[
            'blog_title.required' => 'Blog title is required',
            'blog_slug.required' => 'Blog slug is required',
            'blog_desc.required' => 'Blog Description is required',
            'blog_image.required' => 'Blog image is required'
        ]);

        // img setting
        if($request->hasFile('blog_image')){

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('blog_image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/blog/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            blog::findOrFail($id)->update([
                'blog_image' => $last_image
            ]);

        }
        // insert data
        $data = blog::findOrFail($id);
        $data->blog_title = $request->blog_title;
        $data->blog_slug = $request->blog_slug;
        $data->blog_desc = $request->blog_desc;
        $data->updated_at = Carbon::now();
        $data->save();
        return redirect()->back()->with('success', 'Blog Update success');

    }

    public function delete($id)
    {
        $data = blog::findOrFail($id);
        if(file_exists($data->blog_image)){
            unlink($data->blog_image);
        }
        $data->delete();
        return response()->json();
    }

    public function Active($id)
    {

        blog::findOrFail($id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with("success", "Status update success");

    }


    public function Deactive($id)
    {
        blog::findOrFail($id)->update([
            'status' => 0
        ]);

        return redirect()->back()->with("success", "Status update success");

    }
}
