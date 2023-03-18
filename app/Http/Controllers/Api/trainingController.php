<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trainingController extends Controller
{
    public function index(){
        $data =  DB::table('trainings')->where('status',1)->get();
        return response()->json($data);
    }
    public function show($slug){
        $data =  DB::table('trainings')->where('status',1)->where('slug',$slug)->first();
       return response()->json($data);  
    }
}
