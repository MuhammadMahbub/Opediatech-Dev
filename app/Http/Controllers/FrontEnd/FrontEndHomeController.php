<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\service;
use App\Models\Team;
use App\Models\EmailSubscribe;
use App\Models\BlogDetails;
use App\Models\blog;
use Carbon\Carbon;

class FrontEndHomeController extends Controller
{

    public function FrontIndex()
    {
        $teams = Team::where('status',1)->latest()->get();
        return view('layouts.frontend.frontend-master', compact('teams'));
    }

    public function SingleService($slug)
    {
        $idReft = ServiceCategory::where('category_slug',$slug)->first('id');
        $id = $idReft->id ?? '';
        $single_service = service::where('service_category_id', '=', $id)->where('status', 1)->get();
        $single_service_details = BlogDetails::where('service_category_id', '=', $id)->first();
        $category = ServiceCategory::find($id);
        return view('layouts.frontend.pages.single_service', compact('single_service', 'single_service_details', 'category'));
    }


    public function Subscribe(Request $res)
    {
        $res->validate([
            '*' => 'required'
        ]);
        $data = new EmailSubscribe();
        $data->email = $res->email;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with('success', 'Subscribe Successful');
    }
    
       

}
