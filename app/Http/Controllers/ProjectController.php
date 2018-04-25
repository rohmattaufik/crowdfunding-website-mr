<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Program;
use Carbon\Carbon;
use App\Donation;
use App\UserMessage;

class ProjectController extends Controller
{
    
    // --------------------------------
    //          ADMIN AREA
    // --------------------------------

    public function viewall_project(){
        $projects = Project::all();
        foreach($projects as $project){
            $project['program'] = Program::find($project->program_id);
        }
        $messages = UserMessage::where('is_read',0)->get();
        return view('admin.project.viewall')->with('projects',$projects)->with('messages',$messages);
    }

    public function view_project($project_id){
        $project = Project::find($project_id);
        if($project == null){
            return redirect()->back();
        }
        $project['program'] = Program::find($project->program_id);
        $messages = UserMessage::where('is_read',0)->get();
        return view('admin.project.view')->with('project',$project)->with('messages',$messages);
    }

    public function create_project(){
        $programs = Program::all();
        $messages = UserMessage::where('is_read',0)->get();
        return view('admin.project.create')->with('programs',$programs)->with('messages',$messages);
    }

    public function create_project_submit(Request $request){
        $program_id = $request->program_id;
        $date_start = $request->date_start;
        $date_close = $request->date_close;
        $target_dana = $request->target_dana;
        $title = $request->title;
        $deskripsi = $request->deskripsi;
        $image = $request->file('image');
        if($title == null or $program_id == null or $date_start== null or $date_close==null or $target_dana==null or $deskripsi==null or $image== null){
            return redirect()->back();
        }
        
        $destinationPath = 'project_image';
        $movea = $image->move($destinationPath,$image->getClientOriginalName());
        $url = "project_image/{$image->getClientOriginalName()}";

        $project = new Project;
        $project->program_id = $program_id;
        $project->date_start = $date_start;
        $project->title = $title;
        $project->date_close = $date_close;
        $project->target_dana = $target_dana;
        $project->deskripsi = $deskripsi;
        $project->dana_terkumpul = 0;
        $project->is_publish = 0;
        $project->image =$url;
        $project->save();

        return redirect('admin/project');
    }

    public function edit_project($project_id){
        $project = Project::find($project_id);
        if($project == null){
            return redirect()->back();
        }
        $project['program'] = Program::find($project->program_id);
        $programs = Program::all();
        $messages = UserMessage::where('is_read',0)->get();
        return view('admin.project.edit')->with('project',$project)->with('programs',$programs)->with('messages',$messages);
    }

    public function edit_project_submit(Request $request){
        $project_id = $request->project_id;
        $project = Project::find($project_id);
        if($project == null){
            return redirect()->back();
        }
        $program_id = $request->program_id;
        $date_start = $request->date_start;
        $date_close = $request->date_close;
        $target_dana = $request->target_dana;
        $title = $request->title;
        $deskripsi = $request->deskripsi;
        $image = $request->file('image');
        if($title == null or $program_id == null or $date_start== null or $date_close==null or $target_dana==null or $deskripsi==null){
            return redirect()->back();
        }
        if(!empty($image)){
            $destinationPath = 'project_image';
            $movea = $image->move($destinationPath,$image->getClientOriginalName());
            $url = "project_image/{$image->getClientOriginalName()}";
            $project->image =$url;
        }
        $project->program_id = $program_id;
        $project->date_start = $date_start;
        $project->date_close = $date_close;
        $project->target_dana = $target_dana;
        $project->title = $title;
        $project->deskripsi = $deskripsi;
        $project->save();

        return redirect('admin/project/'.$project_id);
    }


    // ---------------------------------------
    // USER AREA
    // ---------------------------------------

    public function get_project(){
        $programs = Program::where('flag_active',1)->get();
        $projects = Project::where('is_publish', 1)->where('is_close',0)->where('date_close', '>=', Carbon::now())->where('program_id',$programs[0]->id)->get();
        $id_program = $programs[0]->id;
        return view('user.project')->with('programs',$programs)->with('projects',$projects)->with('id_program', $id_program);
    }

    public function get_project_by_program(Request $request){
        $id_program = $request->id_program;
        if($id_program == null){
            return redirect()->back();
        }
        $programs = Program::where('flag_active',1)->get();
        $projects = Project::where('is_publish', 1)->where('is_close',0)->where('date_close', '>=', Carbon::now())->where('program_id',$id_program)->get();
        return view('user.project')->with('programs',$programs)->with('projects',$projects)->with('id_program', $id_program);
    }

    public function user_view_project ($project_id){
        $project = Project::find($project_id); 
        if($project == null or $project->is_publish == 0){
            return redirect()->back();
        }
        return view('user.view_project')->with('project',$project);
    }

    public function donasi (Request $request) {
        $project_id = $request->project_id;
        $email = $request->email;
        $nama = $request->nama;
        $anonim = $request->anonim;
        $jumlah = $request->jumlah;
        if($project_id == null or $email == null or $jumlah == null){
            return redirect()->back();
        }
        $donasi = new Donation;
        $donasi->id_project = $project_id;
        $donasi->email = $email;
        $donasi->nama = $nama;
        if($anonim == null){
            $donasi->is_anonim = 0;
        } else {
            $donasi->is_anonim = 1;
        }
        $donasi->jumlah = $jumlah;
        $donasi->is_confirmation = 0;
        $donasi->save();
        
        return redirect()->back();
    }

}
