<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemAbout;

class SystemController extends Controller
{
    
    // ------------------------------------
    //          ADMIN AREA
    // ------------------------------------

    public function create_system_about (){
        return view('admin.system_about.create');
    }
    
    public function create_system_about_submit (Request $request){
        $name       = $request->name;
        $content    = $request->content;
        if($name == null or $name == "" or $content == null or $content == ""){
            return redirect()->back()->withErrors(['msg', 'Please fill all mandatory form']);
        }
        $system              = new SystemAbout;
        $system->name        = $name;
        $system->content     = $content;
        $system->flag_active = 1;
        $system->save();

        return redirect('admin/system_about');
    }

    public function view_system_about (){
        $systems = SystemAbout::where('flag_active',1)->get();
        return view('admin.system_about.view')->with('systems', $systems);
    }

    public function edit_system_about ( $id_system_about ){
        $system = SystemAbout::find($id_system_about);
        if($system == null){
            return redirect()->back()->withErrors(['msg', 'No system info selected']);
        }
        return view('admin.system_about.edit')->with('system', $system);
    }

    public function edit_system_about_submit (Request $request){
        $content    = $request->content;
        if($content == null or $content == ""){
            return redirect()->back()->withErrors(['msg', 'Please fill all mandatory form']);
        }
        $system             = SystemAbout::find($request->id);
        if($system == null){
            return view('admin.error');
        }
        $system->content    = $content;
        $system->save();

        return redirect('admin/system_about');
    }

    public function delete_system_about ($id_system_about){
        $system = SystemAbout::find($id_system_about);
        if($system == null){
            return view('admin.error');
        }
        $system->flag_active = 0;
        $system->save();
        return redirect('admin/system_about');
    }

    // --------------------------------------
    //          USER AREA
    // --------------------------------------

    public function tentang_mr (){
        $tentangmr = SystemAbout::find(1);
        return view('user.tentang')->with('tentangmr', $tentangmr);
    }

}
