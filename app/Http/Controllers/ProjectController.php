<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Program;
use Carbon\Carbon;
use App\Donation;
use App\UserMessage;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use App\Mail\RekeningDonasi;
use Illuminate\Support\Facades\Mail;

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
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.project.viewall')->with('projects',$projects)->with('messages',$messages);
    }

    public function view_project($project_id){
        $project = Project::find($project_id);
        if($project == null){
            return redirect()->back();
        }
        $project['program'] = Program::find($project->program_id);
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.project.view')->with('project',$project)->with('messages',$messages);
    }

    public function create_project(){
        $programs = Program::all();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
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
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
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

    public function lihat_pendonasi($id_project){
        $project = Project::find($id_project);
        if($project == null){
            return redirect()->back();
        }
        $pendonasi = Donation::where('id_project',$id_project)->get();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.project.view_pendonasi')->with('project',$project)->with('donations',$pendonasi)->with('messages',$messages);
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
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Berikut rekening yang bisa ditransfer';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Madrasah Relawan';
        $objDemo->receiver = $nama;
 
        Mail::to($email)->send(new RekeningDonasi($objDemo));

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

        
        
        return redirect('/konfirmasi/'.$donasi->id);
    }

    public function konfirmasi( $id_donasi ){
        if($id_donasi == null){
            $projects = Project::where('is_publish', 1)->get();    
            return view('user.konfirmasi')->with('projects',$projects)->with('donasi',null);
        }
        $donasi = Donation::find($id_donasi);
        if($donasi == null){
            $projects = Project::where('is_publish', 1)->get();
            return view('user.konfirmasi')->with('projects',$projects)->with('donasi',null);
        }
        $project = Project::where('id',$donasi->id_project)->first();
        if($project == null){
            return redirect()->back();
        }
        return view('user.konfirmasi')->with('project',$project)->with('donasi',$donasi);

    }

    public function konfirmasi_null(){
        return redirect('/konfirmasi/0');
    }

    public function konfirmasi_submit(Request $request){
        $id_donasi = $request->id_donasi;
        $id_project = $request->id_project;
        $email = $request->email;
        $jumlah = $request->jumlah;
        $nama = $request->nama;
        $bank_asal = $request->bank_asal;
        $bank_tujuan = $request->bank_tujuan;
        $nama_rekening = $request->nama_rekening;
        $tanggal = $request->tanggal;
        
        if($id_donasi == null){
            $donasi = Donation::where('id_project',$id_project)->where('email',$email)->where('jumlah',$jumlah)->where('is_confirmation',0)->get();
            if($donasi == null or count($donasi)>1){
                return redirect()->back();
            }
            $donasi = $donasi[0];
            $donasi->bank_asal = $bank_asal;
            $donasi->bank_tujuan = $bank_tujuan;
            $donasi->nama_rekening = $nama_rekening;
            $donasi->jumlah = $jumlah;
            $donasi->tanggal_transfer = $tanggal;
            $donasi->is_confirmation = 1;
            $donasi->save();

            $project = Project::find($id_project);
            $project->dana_terkumpul += $jumlah;
            $project->save();
            return redirect('/view_project/'.$donasi->id_project);
        }else{
            $donasi = Donation::find($id_donasi);
            if($donasi == null or $donasi->is_confirmation == 1){
                return redirect()->back();
            }
            $donasi->bank_asal = $bank_asal;
            $donasi->bank_tujuan = $bank_tujuan;
            $donasi->nama_rekening = $nama_rekening;
            $donasi->jumlah = $jumlah;
            $donasi->tanggal_transfer = $tanggal;
            $donasi->is_confirmation = 1;
            $donasi->save();

            $project = Project::find($id_project);
            $project->dana_terkumpul += $jumlah;
            $project->save();
            return redirect('/view_project/'.$donasi->id_project);
        }
    }

}
