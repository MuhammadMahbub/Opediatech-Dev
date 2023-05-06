<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    public function index(){
        return view('backend.seo.index',[
            'seo' => SeoSetting::first()
        ]);
    }

    function update(Request $request, $id){
        // return $request;
        $request->validate([
            'home_page_seo_title' => 'required',
            'home_page_seo_description' => 'required',
            'service_page_seo_title' => 'required',
            'service_page_seo_description' => 'required',
            'work_page_seo_title' => 'required',
            'work_page_seo_description' => 'required',
            'blog_page_seo_title' => 'required',
            'blog_page_seo_description' => 'required',
            'career_page_seo_title' => 'required',
            'career_page_seo_description' => 'required',
            'contact_page_seo_title' => 'required',
            'contact_page_seo_description' => 'required',
            'gallery_page_seo_title' => 'required',
            'gallery_page_seo_description' => 'required',
        ]);

        $seoSetting = SeoSetting::findOrFail($id);

        $seoSetting->home_page_seo_title = $request->home_page_seo_title;
        $seoSetting->home_page_seo_description = $request->home_page_seo_description;
        $seoSetting->home_page_seo_keywords = $request->home_page_seo_keywords;

        $seoSetting->work_page_seo_title = $request->work_page_seo_title;
        $seoSetting->work_page_seo_description = $request->work_page_seo_description;
        $seoSetting->work_page_seo_keywords = $request->work_page_seo_keywords;

        $seoSetting->agency_page_seo_title = $request->agency_page_seo_title;
        $seoSetting->agency_page_seo_description = $request->agency_page_seo_description;
        $seoSetting->agency_page_seo_keywords = $request->agency_page_seo_keywords;

        $seoSetting->blog_page_seo_title = $request->blog_page_seo_title;
        $seoSetting->blog_page_seo_description = $request->blog_page_seo_description;
        $seoSetting->blog_page_seo_keywords = $request->blog_page_seo_keywords;

        $seoSetting->service_page_seo_title = $request->service_page_seo_title;
        $seoSetting->service_page_seo_description = $request->service_page_seo_description;
        $seoSetting->service_page_seo_keywords = $request->service_page_seo_keywords;

        $seoSetting->gallery_page_seo_title = $request->gallery_page_seo_title;
        $seoSetting->gallery_page_seo_description = $request->gallery_page_seo_description;
        $seoSetting->gallery_page_seo_keywords = $request->gallery_page_seo_keywords;

        $seoSetting->career_page_seo_title = $request->career_page_seo_title;
        $seoSetting->career_page_seo_description = $request->career_page_seo_description;
        $seoSetting->career_page_seo_keywords = $request->career_page_seo_keywords;

        $seoSetting->contact_page_seo_title = $request->contact_page_seo_title;
        $seoSetting->contact_page_seo_description = $request->contact_page_seo_description;
        $seoSetting->contact_page_seo_keywords = $request->contact_page_seo_keywords;

        $seoSetting->team_page_seo_title = $request->team_page_seo_title;
        $seoSetting->team_page_seo_description = $request->team_page_seo_description;
        $seoSetting->team_page_seo_keywords = $request->team_page_seo_keywords;

        $seoSetting->training_page_seo_title = $request->training_page_seo_title;
        $seoSetting->training_page_seo_description = $request->training_page_seo_description;
        $seoSetting->training_page_seo_keywords = $request->training_page_seo_keywords;

        $seoSetting->save();

        return back()->with('success', 'Seo Updated Successfully');
    }
}
