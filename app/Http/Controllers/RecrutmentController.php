<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecrutmentTerm;
use App\RecrutmentQuestion;
use App\RecrutmentQuestionOption;
use Carbon\Carbon;
use DB;
use App\UserMessage;

class RecrutmentController extends Controller
{
    // --------------------------------------
    //          ADMIN AREA
    // --------------------------------------

    // RECRUTMENT TERM
    public function create_recrutment_term(){
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.term.create')->with('messages',$messages);
    }

    public function create_recrutment_term_submit(Request $request){
        $title = $request->title;
        $description = $request->description;
        $date_start = $request->date_start;
        $date_finish = $request->date_finish;

        if($title == null or $title=="" or $description==null or $description=="" or $date_finish==null or $date_finish=="" or $date_start==null or $date_start==""){
            return redirect()->back();
        }
        $term = new RecrutmentTerm;
        $term->title = $title;
        $term->description = $description;
        $term->date_start = $date_start;
        $term->date_finish = $date_finish;
        $term->is_publish =  0;
        $term->save();

        return redirect('admin/recrutment/term');
    }

    public function viewall_recrutment_term(){
        $recrutments = RecrutmentTerm::all();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.term.viewall')->with('recrutments', $recrutments)->with('messages',$messages);
    }

    public function view_recrutment_term($id_term){
        $recrutment_term = RecrutmentTerm::find($id_term);
        if($recrutment_term == null){
            return redirect()->back();
        }
        $questions = RecrutmentQuestion::where('id_recrutment_term', $id_term)->get();
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.term.view')->with('recrutment', $recrutment_term)->with('questions',$questions)->with('messages',$messages);
    }

    public function edit_recrutment_term($id_term){
        $recrutment_term = RecrutmentTerm::find($id_term);
        if($recrutment_term == null){
            return redirect()->back();
        }
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.term.edit')->with('recrutment', $recrutment_term)->with('messages',$messages);
    }

    public function edit_recrutment_term_submit (Request $request){
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $date_start = $request->date_start;
        $date_finish = $request->date_finish;

        if($title == null or $title=="" or $description==null or $description=="" or $date_finish==null or $date_finish=="" or $date_start==null or $date_start==""){
            return redirect()->back();
        }
        $term = RecrutmentTerm::find($id);
        if($term == null){
            return redirect()->back();
        }
        $term->title = $title;
        $term->description = $description;
        $term->date_start = $date_start;
        $term->date_finish = $date_finish;
        $term->save();

        return redirect('admin/recrutment/term');
    }

    public function publish_recrutment_term($id_recrutment){
        $term = RecrutmentTerm::find($id_recrutment);
        if($term == null){
            return redirect()->back();
        }
        $term->is_publish = 1;
        $term->save();
        return redirect()->back();
    }

    public function unpublish_recrutment_term($id_recrutment){
        $term = RecrutmentTerm::find($id_recrutment);
        if($term == null){
            return redirect()->back();
        }
        $term->is_publish = 0;
        $term->save();
        return redirect()->back();
    }

    // RECRUTMENT QUESTION
    public function add_recrutment_question ($id_recrutment_term){
        $recrutment_term = RecrutmentTerm::find($id_recrutment_term);
        if($recrutment_term == null){
            return redirect()->back();
        }
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.question.add')->with('recrutment', $recrutment_term)->with('messages',$messages);
    }

    public function add_recrutment_question_submit (Request $request){
        $recrutment_term = $request->id_term;
        $question = $request->question;
        $answer_type = $request->answer_type;

        if($question == null or $question== "" or $answer_type== null ){
            return redirect()->back();
        }
        $term = RecrutmentTerm::find($recrutment_term);
        if($term == null){
            return redirect::back();
        }
        $recrutment_question = new RecrutmentQuestion;
        $recrutment_question->id_recrutment_term = $recrutment_term;
        $recrutment_question->question = $question;
        $recrutment_question->answer_type = $answer_type;
        $recrutment_question->save();

        if($answer_type==3){
            $options = $request->option;
            foreach ($options as $key => $value) {
                if($value != "" or $value != null){
                    $option1 = new RecrutmentQuestionOption;
                    $option1->id_recrutment_question = $recrutment_question->id;
                    $option1->option_text = $value;
                    $option1->save();
                }
            }
        }
        return redirect('admin/recrutment/term/'.$recrutment_term);
    }

    public function edit_recrutment_question ($id_recrutment_question){
        $recrutment_question = RecrutmentQuestion::find($id_recrutment_question);
        if($recrutment_question == null){
            return redirect()->back();
        }
        if($recrutment_question->answer_type == 3){
            $recrutment_question['options'] = RecrutmentQuestionOption::where('id_recrutment_question',$id_recrutment_question)->get();
        }
        $messages = UserMessage::where('is_read',0)->orderBy('id','desc')->get();
        return view('admin.recrutment.question.edit')->with('recrutment_question', $recrutment_question)->with('messages',$messages);
    }

    public function edit_recrutment_question_submit (Request $request){
        $recrutment_question = $request->id_question;
        $question = $request->question;
        $answer_type = $request->answer_type;

        if($question == null or $question== "" or $answer_type== null ){
            return redirect()->back();
        }
        $recrutment_question = RecrutmentQuestion::find($recrutment_question);
        if($recrutment_question == null){
            return redirect()->back();
        }
        $recrutment_question->question = $question;
        $recrutment_question->answer_type = $answer_type;
        $recrutment_question->save();
        if($answer_type==3){
            DB::table('recrutment_question_options')->where('id_recrutment_question','=',$request->id_question)->delete();
            $options = $request->option;
            foreach ($options as $key => $value) {
                if($value != "" or $value != null){
                    $option1 = new RecrutmentQuestionOption;
                    $option1->id_recrutment_question = $recrutment_question->id;
                    $option1->option_text = $value;
                    $option1->save();
                }
            }
        }
        return redirect('admin/recrutment/term/'.$recrutment_question->id_recrutment_term);
    }

    public function delete_recrutment_question ($id_question){
        $question = RecrutmentQuestion::find($id_question);
        if($question == null){
            return redirect()->back();
        }
        DB::table('recrutment_questions')->where('id','=',$id_question)->delete();
        return redirect()->back();
    }

    // -----------------------------------------
    //  USER AREA
    // -----------------------------------------

    public function daftar_relawan (){
        $time = Carbon::now();
        $recrutments = RecrutmentTerm::where('is_publish', 1)->where('date_finish','>=',$time)->orderBy('date_finish','desc')->get();
        foreach($recrutments as $term){
            $term['questions'] = RecrutmentQuestion::where('id_recrutment_term',$term->id)->get();
            foreach($term['questions'] as $question){
                if($question->answer_type == 3){
                    $question['options'] = RecrutmentQuestionOption::where('id_recrutment_question',$question->id)->get();
                }
            }
        }
        return view('user.daftar_relawan')->with('recrutments',$recrutments);
    }
}
