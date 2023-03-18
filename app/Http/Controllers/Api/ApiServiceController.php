<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;

class ApiServiceController extends Controller
{
    public function index(){
        $data =  DB::table('services')->where('status',1)->latest()->get();
        return response()->json($data);
    }

     public function getServiceSingleData($slug){
         $data = service::where('service_slug', $slug)->where('status',1)->first();
         return response()->json($data);
    }

    public function CatToService(){
        $datas = ServiceCategory::all();
      $data =  $datas->map(function($cat)
          {
              $service = service::where('service_category_id', $cat->id)->where('status',1)->get();
              return array('category_name'=>$cat->category_name,'category_slug'=>$cat->category_slug,'image'=>$cat->image, 'services'=>$service ) ;
          });

          return response()->json($data);
    }

    public function  getServiceCategory()
    {
        $data = ServiceCategory::all();
        return response()->json($data);
    }

    public function getServiceSubCategory($category_slug)
    {
        $data = service::where('service_category_id', ServiceCategory::where('category_slug', $category_slug)->firstOrFail()->id)->where('status',1)->get();
        $desc = ServiceCategory::where('category_slug',$category_slug)->first()->category_desc;
        $category_name = ServiceCategory::where('category_slug',$category_slug)->first()->category_name;
        $category_title_desc = ServiceCategory::where('category_slug',$category_slug)->first()->category_title_desc;
        $image = ServiceCategory::where('category_slug',$category_slug)->first()->image;
        $seo_desc = ServiceCategory::where('category_slug',$category_slug)->first()->seo_description;
        $seo_title = ServiceCategory::where('category_slug',$category_slug)->first()->seo_title;
        return response()->json(array('data'=>$data, 'category_name'=>$category_name,'title_desc'=>$category_title_desc, 'desc'=>$desc,'image'=>$image,'seo_desc'=>$seo_desc, "seo_title"=>$seo_title));
    }

    public function reletedService($slug){
       $catId= service::where('service_slug',$slug)->where('status',1)->first()->service_category_id;
       $data= service::where('service_category_id',$catId)->latest()->get();
        return response()->json($data);
    }

    public function FeaturedService()
    {
        $data = service::where('isFeatured', 1)->where('status',1)->take(4)->get();
        return response()->json($data);
    }





}
