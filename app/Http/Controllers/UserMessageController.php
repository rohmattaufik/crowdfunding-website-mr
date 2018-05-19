<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;

class UserMessageController extends Controller
{
    // --------------------------------
    //  ADMIN AREA
    // --------------------------------

    public function get_message (){
        $pesans = UserMessage::orderBy('created_at','desc')->get();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        $unread = UserMessage::where('is_read',0)->get();
        foreach($unread as $pesan){
            $pesan->is_read = 1;
            $pesan->save();
        }
        return view('admin.message.viewall')->with('pesans',$pesans)->with('messages',$messages);
    }
    
    
    
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
