<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;

class UserMessageController extends Controller
{
    // --------------------------------
    //  USER AREA
    // --------------------------------

    public function add_message(Request $request){
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $subject = $request->subject;
        $pesan = $request->message;
        if($first_name == "" or $email=="" or $subject=="" or $pesan==""){
            return redirect()->back();
        }
        $user_message = new UserMessage;
        $user_message->first_name = $first_name;
        $user_message->last_name = $last_name;
        $user_message->email = $email;
        $user_message->subject = $subject;
        $user_message->pesan = $pesan;
        $user_message->is_read = 0;
        $user_message->save();
        return redirect()->back();
    }
}
