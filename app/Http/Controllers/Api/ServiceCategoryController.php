<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function  getServiceCategory()
    {
        $data = ServiceCategory::all();
        return response()->json($data);
    }

    public function getServiceSubCategory($category_slug)
    {
        $data = service::where('service_category_id', ServiceCategory::where('category_slug', $category_slug)->firstOrFail()->id)->get();
        return response()->json($data);
    }


    public function serviceDetils($service_slug)
    {
        $data = service::where('service_slug', $service_slug)->first();
        return response()->json($data);
    }


}
