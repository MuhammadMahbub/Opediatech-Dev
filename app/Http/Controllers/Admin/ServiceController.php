<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use App\Http\Requests\ServiceMessageRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::orderBy('id', 'desc')->get();
        return view('backend.service.serviceIndex', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_categories = ServiceCategory::orderBy('id', 'desc')->get();
        return view('backend.service.serviceCreate', compact('service_categories'));
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
            'service_title' => 'required',
            'service_desc' => 'required',
            'service_type' => 'required',
            'platform_type' => 'required',
            'project_complete' => 'required',
            'operating_system' => 'required',
            'work_experience' => 'required',
            'total_clients' => 'required',
            'color_code' => 'required',
            'service_category_id' => 'required',
            'service_image' => 'required|image',
        ]);

        // img setting
        $file_name = $_FILES['service_image']['name'];
        $file_tmp_name = $_FILES['service_image']['tmp_name'];
        $file_ext = explode('.', $file_name);
        $fileActExt = strtolower(end($file_ext));
        $allow = array('jpg', 'png', 'gif', 'jpeg');
        if(in_array($fileActExt, $allow)){
            $last_image = 'backend/assets/images/uploads/portfolio/'.$file_name;
            move_uploaded_file($file_tmp_name, $last_image );
        }else {
            return redirect()->back()->with("fail", "You can't upload files of this type !");
        }

        // insert data
        $data = new service();
        $data->service_title = $request->service_title;
        $data->service_desc = $request->service_desc;
        $data->service_type = $request->service_type;
        $data->platform_type = $request->platform_type;
        $data->operating_system = $request->operating_system;
        $data->project_complete = $request->project_complete;
        $data->work_experience = $request->work_experience;
        $data->total_clients = $request->total_clients;
        $data->color_code = $request->color_code;
        $data->service_category_id = $request->service_category_id;
        $data->service_image = $last_image;
        $data->created_at = Carbon::now();
        $data->save();

        return redirect()->route('service.index')->with('success', 'Service Created Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = service::findOrFail($id);
        return view('backend.service.serviceView', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = service::findOrFail($id);
        $service_categories = ServiceCategory::orderBy('id', 'desc')->get();
        return view('backend.service.serviceEdit', compact('data', 'service_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $request->validate([
            'service_title' => 'required',
            'service_desc' => 'required',
            'service_type' => 'required',
            'platform_type' => 'required',
            'project_complete' => 'required',
            'operating_system' => 'required',
            'work_experience' => 'required',
            'total_clients' => 'required',
            'color_code' => 'required',
            'service_category_id' => 'required',
            'service_image' => 'image',
        ]);

        $images = $request->file('service_image');


        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('service_image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/portfolio/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = service::findOrFail($id);
            $data->service_image = $last_image;
            $data->save();
        }
        // insert data
        $data = service::findOrFail($id);

        $data->service_title = $request->service_title;
        $data->service_desc = $request->service_desc;
        $data->service_type = $request->service_type;
        $data->platform_type = $request->platform_type;
        $data->operating_system = $request->operating_system;
        $data->project_complete = $request->project_complete;
        $data->work_experience = $request->work_experience;
        $data->total_clients = $request->total_clients;
        $data->color_code = $request->color_code;
        $data->service_category_id = $request->service_category_id;
        $data->updated_at = Carbon::now();
        $data->save();

        return redirect()->route('service.index')->with('success', 'Service Updated Success');


    }


    public function servicePublished($id)
    {
        service::findOrFail($id)->update(['status' => 1]);
        return back();
    }


    public function servicePending($id)
    {
        service::findOrFail($id)->update(['status' => 0]);
        return back();
    }


    public function serviceDelete($id)
    {
      $data = service::findOrFail($id);
      if(file_exists($data->featured_img)){
          unlink($data->featured_img);
      }
        $data->delete();
        return response()->json();
    }

    // Featured image/Not Featured
    public function Featured($id)
    {
      service::where('id',$id)->update([
      'isFeatured'=>1,
      ]);
      return back();
    }

    public function unFeatured($id){
      service::where('id',$id)->update([
      'isFeatured'=>0,
      ]);
      return back();
    }
}
