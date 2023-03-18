<?php

use App\Models\EmailSubscribe;
use App\Models\Message;

function message()
{
    return Message::orderBy('id', 'desc')->get();

}
function viewStatus()
{
    return Message::where('view_status', 0)->get();
}

function getEmail()
{
    return EmailSubscribe::all();
}

 