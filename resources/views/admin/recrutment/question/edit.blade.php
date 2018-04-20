@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pendaftaran Relawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pendaftaran Relawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{url('admin/recrutment/question/edit/submit')}}" >
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Edit Pertanyaan</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id_question" value="{{$recrutment_question->id}}">
                        <!-- select -->
                        <div class="form-group">
                            <label>Tipe Jawaban</label>
                            <select class="form-control" name="answer_type">
                            @if($recrutment_question->answer_type==1)
                                <option value="1" selected="true">Text</option>
                            @else
                                <option value="1" >Text</option>
                            @endif

                            @if($recrutment_question->answer_type==2)
                                <option  value="2" selected="true">Text Panjang</option>
                            @else
                                <option  value="2">Text Panjang</option>
                            @endif

                            @if($recrutment_question->answer_type==3)
                                <option  value="3" selected="true">Option</option>
                            @else
                                <option  value="3">Option</option>
                            @endif

                            @if($recrutment_question->answer_type==4)
                                <option  value="4" selected="true">Tanggal</option>
                            @else
                                <option  value="4">Tanggal</option>
                            @endif

                            @if($recrutment_question->answer_type==4)
                                <option  value="5" selected="true">Text</option>
                            @else
                                <option  value="5">Text</option>
                            @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">Pertanyaan</label>
                            <textarea id="summernote" name="question">{{$recrutment_question->question}}</textarea>
                        </div>
                </div>
                <div class="box-footer">
                    <div class="pull-right box-tools">
                        <input type="submit" value="Simpan" class="btn btn-success btn-sm" data-toggle="tooltip"
                                title="Save"></button>
                    </div>        
                </div>
            </form>
          </div>   
    </section>
    <!-- /.content -->

@endsection

@section('script')
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height: 120,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote
  });
});
 </script>
@endsection


