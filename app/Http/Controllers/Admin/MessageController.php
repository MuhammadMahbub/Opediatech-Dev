<?php

namespace App\Http\Controllers\Admin;
use App\Events\ContactMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Notifications\ContactMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class MessageController extends Controller
{
    public function getMessage()
    {
        return view('backend.message.messageIndex');
    }


    public function messagePublished($id){
        Message::findOrFail($id)->update(['status' => 1]);
        return  redirect()->back()->with('success', 'Your comment is published');
    }


    public function messagePending($id){
        Message::findOrFail($id)->update(['status' => 0]);
        return  redirect()->back()->with('success', 'Your comment is pending');
    }


    public function messageView($id){
        $single_info = Message::findOrFail($id)->first();
        Message::findOrFail($id)->update(['view_status' => 1]);
        return view('backend.message.messageView', compact('single_info'));
    }


    public function messageDelete($id){
        Message::findOrFail($id)->delete();
        return response()->json();
    }



}
