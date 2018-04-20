@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{ url('admin/new-project/submit') }}" enctype="multipart/form-data">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Tambah Project</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="judul">Judul Project</label>
                            <input type="text" name="title" class="form-control" id="judul" placeholder="judul project">
                        </div>
                        <!-- Date -->
                        <div class="form-group col-md-6">
                            <label>Tanggal Buka:</label>

                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date_start"   class="form-control pull-right" id="datepicker" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- Date -->
                        <div class="form-group col-md-6">
                            <label>Tanggal Tutup:</label>

                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date_close"   class="form-control pull-right" id="datepicker2">
                            </div>
                            <!-- /.input group -->
                        </div>
                         <!-- select -->
                         <div class="form-group">
                            <label>Program</label>
                            <select class="form-control" name="program_id">
                                @foreach($programs as $program)
                                <option value="{{$program->id}}">{{$program->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="number" placeholder="target dana" name="target_dana" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputFile">Gambar</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="detail">Deskripsi Project</label>
                            <textarea id="summernote" name="deskripsi"></textarea>
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
    height: 300,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote
  });
});
 </script>
 <script type="text/javascript">
$(function () {
    
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    });

     //Date picker
     $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    });

    
  });
</script>
@endsection



