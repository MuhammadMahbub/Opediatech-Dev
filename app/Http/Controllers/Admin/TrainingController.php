<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;
use Carbon\Carbon;
use Image;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::latest()->get();
        return view('backend.training.trainingIndex',compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.training.trainingCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     '*' => 'required',
        //     'portfolio_title'=> 'required|unique:portfolios',
        // ]);

        // img setting
        $images = $request->file('Featured_img');
        $img_ext = strtolower($images->getClientOriginalExtension());
        $hex_name = hexdec(uniqid());
        $img_name = $hex_name . '.' . $img_ext;
        $location = 'backend/assets/images/uploads/training/';
        $last_image = $location. $img_name;
        Image::make($images)->save($last_image);

        // insert
        $data = new Training();
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->course_name = $request->course_name;
        $data->duration = $request->duration;
        $data->classes = $request->classes;
        $data->pre_requirement = $request->pre_requirement;
        $data->system_config = $request->system_config;
        $data->course_fee_online = $request->course_fee_online;
        $data->course_fee_offline = $request->course_fee_offline;
        $data->youtube_link = $request->youtube_link;
        $data->Featured_img = $last_image;
        $data->description = $request->description;
        $data->seo_description = $request->seo_description;
        $data->seo_title = $request->seo_title;
        $data->status = 1;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with('success', 'Training add success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::findOrFail($id);
        return view('backend.training.trainingView',compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::findOrFail($id);
        return view('backend.training.trainingEdit',compact('training'));
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



        $images = $request->file('Featured_img');

        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('Featured_img');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/training/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = Training::findOrFail($id);
            $data->Featured_img = $last_image;
            $data->save();
        }

        $data = Training::findOrFail($id);
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->course_name = $request->course_name;
        $data->duration = $request->duration;
        $data->classes = $request->classes;
        $data->pre_requirement = $request->pre_requirement;
        $data->system_config = $request->system_config;
        $data->course_fee_online = $request->course_fee_online;
        $data->course_fee_offline = $request->course_fee_offline;
        $data->youtube_link = $request->youtube_link;
        $data->description = $request->description;
          $data->seo_title = $request->seo_title;
          $data->seo_description = $request->seo_description;
        $data->status = $request->status;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with('success', 'Training add success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Training::findOrFail($id);
            if(file_exists($data->Featured_img)){
                unlink($data->Featured_img);
            }
        $data->delete();
        return response()->json();
    }
}
