<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Image;
use Carbon\Carbon;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('backend.team.teamIndex',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.teamCreate');
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
            'image' => 'required|image',
            'name' => 'required',
            'title' => 'required',
        ]);

        if($request->file('image'))
        {
            $images = $request->file('image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/team/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
        }
        

        // insert
        $data = new Team();
        $data->image =$last_image;
        $data->name = $request->name;
        $data->title = $request->title;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->route('team.index')->with('success', 'Member add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.team.teamView',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::findOrFail($id);
        return view('backend.team.teamEdit',compact('data'));
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
        $request->validate([
            'image' => 'image',
            'name' => 'required',
            'title' => 'required',
        ]);

        $images = $request->file('image');

        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/team/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = Team::findOrFail($id);
            $data->image = $last_image;
            $data->save();
        }

        $data = Team::findOrFail($id);
        $data->name = $request->name;
        $data->title = $request->title;
        $data->updated_at = Carbon::now();
        $data->save();
        return redirect()->route('team.index')->with('success', 'Team updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Team::findOrFail($id);
        if(file_exists($data->image)){
            unlink($data->image);
        }
    $data->delete();
    return response()->json();
    }


    public function Active($id)
    {

        Team::findOrFail($id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with("success", "Status update success");

    }


    public function Deactive($id)
    {
        Team::findOrFail($id)->update([
            'status' => 0
        ]);

        return redirect()->back()->with("success", "Status update success");

    }


}
