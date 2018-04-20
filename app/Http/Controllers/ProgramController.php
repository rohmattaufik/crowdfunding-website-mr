<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\ProgramDocumentation;
use DB;

class ProgramController extends Controller
{
    // -----------------------------
    //      ADMIN AREA
    // -----------------------------

    public function viewall_program(){
        $programs = Program::all();
        return view('admin.program.viewall')->with('programs', $programs);
    }

    public function view_program( $id_program ){
        $program = Program::find($id_program);
        if($program == null){
            return redirect()->back();
        }
        $dokumentasi = ProgramDocumentation::where('id_program', $id_program)->get();
        return view('admin.program.view')->with('program',$program)->with('documentations',$dokumentasi);
    }

    public function create_program (){
        return view('admin.program.create');
    }
    
    public function create_program_submit (Request $request){
        $judul = $request->judul;
        $info = $request->program_info;
        if($judul == null or $judul=="" or $info==null or $info==""){
            return redirect()->back();
        }
        $program = new Program;
        $program->name = $judul;
        $program->program_info = $info;
        $program->flag_active = 0;
        $program->save();

        return redirect('admin/program');
    }

    public function edit_program($id_program){
        $program = Program::find($id_program);
        if($program == null){
            return redirect()->back();
        }
        return view('admin.program.edit')->with('program',$program);
    }

    public function edit_program_submit (Request $request){
        $program = Program::find($request->id);
        if($program == null){
            return redirect()->back();
        }
        $judul = $request->judul;
        $info = $request->program_info;
        if($judul == null or $judul=="" or $info==null or $info==""){
            return redirect()->back();
        }
        $program->name = $judul;
        $program->program_info = $info;
        $program->save();

        return redirect('admin/program/'.$request->id);
    }

    public function activate_program ($id_program){
        $program = Program::find($id_program);
        if($program == null){
            return redirect()->back();
        }
        $program->flag_active = 1;
        $program->save();
        return redirect()->back();
    }

    public function nonactivate_program ($id_program){
        $program = Program::find($id_program);
        if($program == null){
            return redirect()->back();
        }
        $program->flag_active = 0;
        $program->save();
        return redirect()->back();
    }

    public function create_program_documentation( $id_program ){
        $program = Program::find($id_program);
        if($program == null){
            return redirect()->back();
        }
        return view('admin.program.documentation.create')->with('id_program', $id_program);
    }

    public function create_program_documentation_submit (Request $request){
        $id_program = $request->id_program;
        $documentation_name = $request->documentation_name;
        $image = $request->file('image');
        if($image == null or $id_program==null or $documentation_name== null or $documentation_name==""){
            return redirect()->back();
        }
        $destinationPath = 'program_documentations';
        $movea = $image->move($destinationPath,$image->getClientOriginalName());
        $url = "program_documentations/{$image->getClientOriginalName()}";

        $documentation = new ProgramDocumentation;
        $documentation->id_program = $id_program;
        $documentation->dokumentation_name = $documentation_name;
        $documentation->dokumentation_url = $url;
        $documentation->save();

        return redirect('admin/program/'.$id_program);
    }

    public function edit_program_documentation ($id_documentation) {
        $documentation = ProgramDocumentation::find($id_documentation);
        if($documentation == null){
            return redirect()->back();
        }
        return view('admin.program.documentation.edit')->with('documentation', $documentation);
    }

    public function edit_program_documentation_submit (Request $request){
        $id_documentation = $request->id_documentation;
        $documentation = ProgramDocumentation::find($id_documentation);
        if($documentation == null){
            return redirect()->back();
        }
        $documentation_name = $request->documentation_name;
        $image = $request->file('image');
        if($id_documentation==null or $documentation_name== null or $documentation_name==""){
            return redirect()->back();
        }
        if($image != null){
            $destinationPath = 'program_documentations';
            $movea = $image->move($destinationPath,$image->getClientOriginalName());
            $url = "program_documentations/{$image->getClientOriginalName()}";
            $documentation->dokumentation_url = $url;
        }
        $documentation->dokumentation_name = $documentation_name;
        $documentation->save();

        return redirect('admin/program/'.$documentation->id_program);
    }

    public function delete_program_documentation ( $id_documentation){
        $documentation = ProgramDocumentation::find($id_documentation);
        if($documentation== null){
            return redirect()->back();
        }
        $id_program = $documentation->id_program;
        DB::table('program_documentations')->where('id','=',$id_documentation)->delete();
        return redirect('admin/program/'.$id_program);
    }


    
    // -------------------------------------------------------
    //          USER AREA
    // -------------------------------------------------------

    public function program(){
        $programs = Program::where('flag_active',1)->get();
        foreach($programs as $program){
            $program['documentation'] = ProgramDocumentation::where('id_program',$program->id)->get();
        }
        return view('user.program')->with('programs',$programs);
    }
}
