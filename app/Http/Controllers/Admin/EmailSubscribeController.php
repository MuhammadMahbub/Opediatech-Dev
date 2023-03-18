<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Mail\SubscribeMail;
use App\Models\EmailSubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSubscribeController extends Controller
{
    public function Emailindex()
    {
        $emails = EmailSubscribe::orderBy('id', 'desc')->get();
        return view('backend.email.emailIndex', compact('emails'));
    }

    public function EmailDelete($id)
    {

        EmailSubscribe::findOrFail($id)->delete();
        return response()->json();
    }



    public function EmailSend($id)
    {
        Mail::to(EmailSubscribe::findOrFail($id)->email)->send(new SubscribeMail());
        return back();
    }

    public function sendAllemail(Request $request)
    {
        foreach($request->email as $id){
            Mail::to(EmailSubscribe::findOrFail($id)->email)->send(new SubscribeMail());
        }
        return back();
    }



}
