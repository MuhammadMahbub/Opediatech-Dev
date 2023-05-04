<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('backend.portfolio.portfolioIndex', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.portfolio.portfolioCreate', compact('categories'));
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
            'portfolio_title'=> 'required|unique:portfolios',
            'project_name'=>'required',
            'thambnail_image'=>'required|image',
            'category_id'=>'required'
        ]);

        $data = new Portfolio();
        $images = $request->file('thambnail_image');

        // img setting
        if($images != ""){
            $images = $request->file('thambnail_image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/portfolio/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
        }

        // insert
        $data->category_id = $request->category_id;
        $data->portfolio_title = $request->portfolio_title;
        $data->portfolio_desc = $request->portfolio_desc;
        $data->project_name = $request->project_name;
        $data->project_client = $request->project_client;
        $data->project_mode = $request->project_mode;
        $data->location = $request->location;
        $data->thambnail_image = $last_image;
        $data->fbLink = $request->fbLink;
        $data->twLink = $request->twLink;
        $data->inLink = $request->inLink;
        $data->insLink = $request->insLink;
        $data->portfolio_slug = Str::slug($request->portfolio_title, "-");
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.portfolioView', compact('portfolio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Portfolio::findOrFail($id);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.portfolio.portfolioEdit', compact('data', 'categories'));
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
            'portfolio_title'=> 'required',
            'project_name'=>'required',
            'category_id'=>'required'
        ]);
        $images = $request->file('thambnail_image');

        if($images != ""){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
            $images = $request->file('thambnail_image');
            $img_ext = strtolower($images->getClientOriginalExtension());
            $hex_name = hexdec(uniqid());
            $img_name = $hex_name . '.' . $img_ext;
            $location = 'backend/assets/images/uploads/portfolio/';
            $last_image = $location. $img_name;
            Image::make($images)->save($last_image);
            // insert
            $data = Portfolio::findOrFail($id);
            $data->thambnail_image = $last_image;
            $data->save();
        }
        $data = Portfolio::findOrFail($id);
        $data->category_id = $request->category_id;
        $data->portfolio_title = $request->portfolio_title;
        $data->portfolio_desc = $request->portfolio_desc;
        $data->project_name = $request->project_name;
        $data->project_client = $request->project_client;
        $data->project_mode = $request->project_mode;
        $data->location = $request->location;
        $data->fbLink = $request->fbLink;
        $data->twLink = $request->twLink;
        $data->inLink = $request->inLink;
        $data->insLink = $request->insLink;
        $data->portfolio_slug = Str::slug($request->portfolio_title, "-");
        $data->updated_at = Carbon::now();
        $data->save();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio Update Success');



    }

    public function portfolioDelete($id)
    {
        $data = Portfolio::findOrFail($id);
        if(file_exists($data->thambnail_image)){
            unlink($data->thambnail_image);
        }
        $data->delete();
        return response()->json();
    }
}
