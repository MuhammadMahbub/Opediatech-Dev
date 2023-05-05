<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\MultipleImage;
use App\Models\SubGallery;

class PageController extends Controller
{
    public function WorkPageIndex()
    {
        return view('layouts.frontend.pages.work');
    }


    public function ServicePageIndex()
    {
        return view('layouts.frontend.pages.service');
    }

    public function galleryPageIndex()
    {
        $galleries = Gallery::all();
        return view('layouts.frontend.pages.gallery', compact('galleries'));
    }

    public function subGalleryPage($slug)
    {
        $gallery = Gallery::where('slug',$slug)->first();
        $subGalleries = SubGallery::where('gallery_id', $gallery->id)->get();
        return view('layouts.frontend.pages.subGallery', compact('gallery','subGalleries'));
    }

    public function galleryDetails($slug)
    {
        // return $slug;
        $subGallery = SubGallery::where('slug', $slug)->first();
        $gallery = Gallery::findOrFail($subGallery->gallery_id);
        $multipleImage = MultipleImage::where('sub_gallery_id', $subGallery->id)->get();
        return view('layouts.frontend.pages.gallery-details', compact('gallery','subGallery','multipleImage'));       
    }



    public function AgencyPageIndex()
    {
        return view('layouts.frontend.pages.agency');
    }


    public function CareerIndexPage()
    {
        return view('layouts.frontend.pages.career');
    }

    public function BlogIndexPage()
    {
        return view('layouts.frontend.pages.blog');
    }
 
    
    public function contactPageIndex(){
        return view('layouts.frontend.pages.contact');
    }
    public function contactStore(Request $request){
        
        Contact::insert([
                'fname'=> $request->fname,
                'email'=> $request->email,
                'message'=> $request->message,
                'created_at'=>Carbon::now()
            ]);
            return back()->with('success', 'Your message is submitted succesfully!');
    }


}
