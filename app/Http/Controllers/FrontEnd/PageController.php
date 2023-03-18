<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Gallery;

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

    public function galleryDetails($slug)
    {

        $slugwiseimage = Gallery::where('slug', $slug)->first();
        return view('layouts.frontend.pages.gallery-details', compact('slugwiseimage'));       
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
            return back()->with('success', 'Your message is submitted succesfully!');;
    }


}
