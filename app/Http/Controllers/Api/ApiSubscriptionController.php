<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EmailSubscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiSubscriptionController extends Controller
{
    public function store (Request $request){

            $request->validate([
                'email' =>'required',
            ]);
            EmailSubscribe::insert([
                "email"=>$request->email,
                "created_at"=>Carbon::now()
            ]);

            $message = ['Success'=>true, 'message'=>'Successfully Subscribed'];
            return response()->json($message);    
    }
}
