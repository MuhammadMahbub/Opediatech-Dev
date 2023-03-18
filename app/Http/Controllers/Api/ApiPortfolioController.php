<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\Category;

class ApiPortfolioController extends Controller
{
    public function index(){
        $data =  DB::table('portfolios')->latest()->get();
        return response()->json($data); 
    }

    public function CategoryIndex(){
        $data =  DB::table('categories')->latest()->get();
        return response()->json($data); 
    }

    
       
    // categorywise portfolio
    public function getServiceCategoryWiseData($slug){
        
        $id = Category::where('category_slug',$slug)->first()->id;
        $data = Portfolio::where('category_id', $id)->get();
        return response()->json($data);  
    }

    public function getPortfolioSingleData($slug){
        $data = Portfolio::where('portfolio_slug', $slug)->get();
        return response()->json($data); 
    }
}
