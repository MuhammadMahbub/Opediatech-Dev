<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.gallery.index', compact('galleries'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // return $request->gallery_image;
        $request->validate([
            'event_name' => 'required',
            'slug' => 'required',
            'event_image' => 'required',
            'event_desc' => 'required',
            'gallery_image' => 'required',
        ]);

        $image = $request->file('event_image');
        $img_ext = $image->getClientOriginalExtension();
        $hex_code = hexdec(uniqid());
        $full_name = $hex_code.'.'.$img_ext;
        $location = 'backend/assets/uploads/gallery/';

        $last_image = $location. $full_name;
        Image::make($image)->save($last_image);

        Gallery::insert([
            'event_name' => $request->event_name,
            'event_desc' => $request->event_desc,
            'slug' => $request->slug,
            'event_image' => $last_image,
            'gallery_image' => json_encode($request->gallery_image),
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery Inserted');

    }

    /**
    * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.edit', compact('gallery'));
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
        // return $request->gallery_image;
        $request->validate([
            'event_name' => 'required',
            'slug' => 'required',
            'event_desc' => 'required',
        ]);

        $gallery = Gallery::findOrFail($id);
        
        if($request->hasFile('event_image')){
            $image = $request->file('event_image');
            $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/gallery/';
            $image->move( $location, $filename);
            $gallery->event_image = $location.$filename;
        }

        $gallery->event_name = $request->event_name;
        $gallery->event_desc = $request->event_desc;
        $gallery->slug = $request->slug;
        $gallery->gallery_image = json_encode($request->gallery_image);
        $gallery->save();


        return redirect()->route('gallery.index')->with('success', 'Gallery Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galleryDelete($id)
    {
        Gallery::findOrFail($id)->delete();
        return back()->with('success', 'Gallery Deleted');
    }
}
