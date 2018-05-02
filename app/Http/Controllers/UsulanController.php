<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usulan;
use App\UserMessage;

class UsulanController extends Controller
{
    // ------------------------------
    //  ADMIN
    // ------------------------------

    public function lihat_usulan () {
        $usulans = Usulan::all();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.usulan.viewall')->with('usulans',$usulans)->with('messages',$messages);
    }

    // ------------------------------
    //  USER
    // ------------------------------

    public function usulkan(Request $request){
        $nama_pengusul = $request->nama_pengusul;
        $email_pengusul = $request->email_pengusul;
        $nama_penerima = $request->nama_penerima;
        $alamat = $request->alamat;
        $alasan = $request->alasan;
        if($nama_pengusul == null or $nama_penerima == null or $alamat == null or $alasan==null or $email_pengusul ==null){
            return redirect()->back();
        }
        $usulan = new Usulan;
        $usulan->nama_pengusul = $nama_pengusul;
        $usulan->email_pengusul = $email_pengusul;
        $usulan->nama_penerima_manfaat = $nama_penerima;
        $usulan->alamat = $alamat;
        $usulan->alasan = $alasan;
        $usulan->save();
        return redirect()->back();
    }
}
