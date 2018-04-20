<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Program;

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
        return view('admin.project.viewall')->with('projects',$projects);
    }

    public function view_project($project_id){
        $project = Project::find($project_id);
        if($project == null){
            return redirect()->back();
        }
        $project['program'] = Program::find($project->program_id);
        return view('admin.project.view')->with('project',$project);
    }

    public function create_project(){
        $programs = Program::all();
        return view('admin.project.create')->with('programs',$programs);
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
        return view('admin.project.edit')->with('project',$project)->with('programs',$programs);
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
}