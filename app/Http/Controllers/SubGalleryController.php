<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\MultipleImage;
use App\Models\SubGallery;
use Illuminate\Http\Request;

class SubGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_galleries = SubGallery::all();
        return view('backend.sub_gallery.index', compact('sub_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('backend.sub_gallery.create', compact('galleries'));
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
            'gallery_id' => 'required',
            'title' => 'required|unique:sub_galleries,title',
            'slug' => 'required',
            'thumbnail_image' => 'required|image',
            'description' => 'required',
        ]);

        $subGallery = new SubGallery();

        if($request->hasFile('thumbnail_image'))
        {
           $image      = $request->file('thumbnail_image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = 'backend/assets/uploads/subGallery/';
           $image->move( $location, $filename);
           $subGallery->thumbnail_image = $location.$filename;
        }

        $subGallery->gallery_id = $request->gallery_id;
        $subGallery->title = $request->title;
        $subGallery->slug = $request->slug;
        $subGallery->description = $request->description;

        $subGallery->save();

        if($request->file('multiple_image')){
            foreach (request()->file('multiple_image') as $image) {
                $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
                $location   = 'backend/assets/uploads/subGallery/';
                $image->move( $location, $filename);
     
                 MultipleImage::create([
                     'sub_gallery_id' => $subGallery->id,
                     'image' => $location.$filename 
                 ]);    
             }
        }
        
        
        return redirect()->route('sub_gallery.index')->with('success','Sub Gallery Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubGallery  $subGallery
     * @return \Illuminate\Http\Response
     */
    public function show(SubGallery $subGallery)
    {
        return view('backend.sub_gallery.show',compact('subGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubGallery  $subGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(SubGallery $subGallery)
    {
        $galleries = Gallery::all();
        return view('backend.sub_gallery.edit', compact('galleries','subGallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubGallery  $subGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gallery_id' => 'required',
            'title' => 'required|unique:sub_galleries,title,'.$id,
            'slug' => 'required',
            'thumbnail_image' => 'image',
            'description' => 'required',
        ]);

        $subGallery = SubGallery::findOrFail($id);

        if($request->hasFile('thumbnail_image'))
        {
           $image      = $request->file('thumbnail_image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = 'backend/assets/uploads/subGallery/';
           $image->move( $location, $filename);
           $subGallery->thumbnail_image = $location.$filename;
        }

        $subGallery->gallery_id = $request->gallery_id;
        $subGallery->title = $request->title;
        $subGallery->slug = $request->slug;
        $subGallery->description = $request->description;
        
        $subGallery->save();

        if($request->file('multiple_image')){
            foreach (request()->file('multiple_image') as $image) {
                $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
                $location   = 'backend/assets/uploads/subGallery/';
                $image->move( $location, $filename);
     
                 MultipleImage::create([
                     'sub_gallery_id' => $subGallery->id,
                     'image' => $location.$filename 
                 ]);    
             }
        }

        return redirect()->route('sub_gallery.index')->with('success','Sub Gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubGallery  $subGallery
     * @return \Illuminate\Http\Response
     */
    public function multiimageDelete(Request $request)
    {
        MultipleImage::findOrFail($request->subGalleryId)->delete();

        return response()->json();
    }

    public function subGalleryDelete($id)
    {
        $multiImage = MultipleImage::where('sub_gallery_id', $id)->get();
        foreach($multiImage as $image){
            $image->delete();
        }
        
        SubGallery::findOrFail($id)->delete();
        return back()->with('success', 'Sub Gallery Deleted');
        
        
    }
}
