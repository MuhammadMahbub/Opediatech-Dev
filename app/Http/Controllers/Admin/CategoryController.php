<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.category.categoryIndex', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.categoryCreate');
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
            'category_name' => 'required|unique:categories',
            'img' => 'required|image',
        ]);

        // return $request->all();

        $data = new Category();

           // img setting
           if($request->file('img')){
            $images = $request->file('img');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/category/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
           }

           // insert
           $data->category_name = $request->category_name;
           $data->title = $request->title;
           $data->category_slug = $request->category_slug;
           $data->img = $last_image ?? "";
           $data->created_at = Carbon::now();
           $data->save();

        // Category::create($request->except('_token'), ['created_at' => Carbon::now()]);
        return redirect()->route('category.index')->with('success', 'Category add success');
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
        $data = Category::findOrFail($id);
        return view('backend.category.editCategory', compact('data'));

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
            '*' => 'required',
        ]);

        $images = $request->file('img');

        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('img');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/category/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = Category::findOrFail($id);
            $data->img = $last_image;
            $data->save();
        }

        $data = Category::findOrFail($id);
           $data->category_name = $request->category_name;
           $data->title = $request->title;
           $data->category_slug = $request->category_slug;
           $data->updated_at = Carbon::now();
           $data->save();
        return redirect()->route('category.index')->with('success', 'Portfolio Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $count = Portfolio::where('category_id', $id)->count();
        if($count > 0){
            return response()->json();
        }else {
            $data = Category::findOrFail($id);
            if(file_exists($data->img)){
                unlink($data->img);
            }
            $data->delete();
            return response()->json();
        }

    }


        /**
     * Is Featured Updated
     *Method Get
     *
     */


    public function isFeatured($id)

    {
        Category::where('isFeatured',1)->update([
        'isFeatured'=>0,
        ]);

        Category::where('id',$id)->update([
        'isFeatured'=>1,
        ]);

        return back();
    }
}
