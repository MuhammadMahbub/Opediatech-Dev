<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiMessageController extends Controller
{
    public function store (Request $request){

        $request->validate([
            '*'=>'required',

        ]);
       Message::insert([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'service'=>$request->service,
            "Created_at"=>Carbon::now()
       ]);

        $message = ['Success'=>true, 'message'=>'Successfully Subscribed'];
        return response()->json($message); 
         


}
}
