<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\SystemAbout;
use App\Program;
use App\Project;
use App\Donation;
use App\Usulan;
use App\ProgramDocumentation;
use App\UserMessage;

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

    public function admin(){
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        $projects = Project::all();
        $unconfirm_donation = Donation::where('is_confirmation',0)->get();
        $usulan = Usulan::all();
        return view('admin.home_admin')->with('messages',$messages)->with('projects',$projects)->with('usulan',$usulan)->with('unconfirm_donation',$unconfirm_donation);
    }

    // --------------------------------------
    //          USER AREA
    // --------------------------------------

    public function tentang_mr (){
        $tentangmr = SystemAbout::find(1);
        return view('user.tentang')->with('tentangmr', $tentangmr);
    }

    public function beranda(){
        $programs = Program::where('flag_active',1)->get();
        foreach($programs as $program){
            $program['image'] = ProgramDocumentation::where('id_program',$program->id)->orderBy('id','desc')->first();
        }
        $project_pilihan = Project::where('is_project_pilihan',1)->first();
        $projects = Project::where('is_publish', 1)->where('is_close',0)->where('date_close', '>=', Carbon::now())->take(6)->get();
        return view('user.beranda')->with('programs',$programs)->with('project_pilihan',$project_pilihan)->with('projects',$projects);
    }

}
