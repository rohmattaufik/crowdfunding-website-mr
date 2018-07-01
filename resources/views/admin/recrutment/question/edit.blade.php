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
                            <select class="form-control" name="answer_type" id="answer_type">
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
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="detail">Pertanyaan</label>
                            <textarea id="summernote" name="question">{{$recrutment_question->question}}</textarea>
                        </div>
                    </div>
                        
                    @if($recrutment_question->answer_type==3)
                    <div id="add_option">
                        <h5><strong>Opsi Jawaban:</strong>
                            <span><button class="add_field_button btn btn-success">+ Tambah Opsi</button></span>
                        </h5>
                        <div class="input_fields_wrap col-md-12" style="padding-top: 10px;">
                        @foreach($recrutment_question['options'] as $option)
                            <div class="col-md-12" style="padding-bottom: 5px;">
                                <input type="text" class="form-control"  style="width: 80%;"
                                    value="{{$option->option_text}}" name="option[]" required><a href="#" class="remove_field">Remove</a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    @else
                    <div id="add_option" class="hidden">
                        <h5><strong>Opsi Jawaban:</strong>
                            <span><button class="add_field_button btn btn-success">+ Tambah Opsi</button></span>
                        </h5>
                        <div class="input_fields_wrap col-md-12" style="padding-top: 10px;">
                        <div class="col-md-12" style="padding-bottom: 5px;">
                            <input type="text" class="form-control"  style="width: 80%;"
                                placeholder="masukkan opsi jawaban" name="option[]" required>
                        </div>
                        </div>
                    </div>
                    @endif
                
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
 <script type="text/javascript">
  $(document).ready(function() {
    var max_fields      = 1000; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="col-md-12" style="padding-bottom: 5px;"><input type="text" style="width: 80%;" class="form-control" placeholder="input option" name="option[]" required/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<script type="text/javascript">
  $('#answer_type').on('input', function(){
      var chapter_type = $('#answer_type').val();
    if (chapter_type != 3) {
      // material form load
      $('#add_option').addClass('hidden');
    } else {
      // test form load
      $('#add_option').removeClass('hidden');
    }
  });
</script>
@endsection


