@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Program
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Program</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{ url('admin/program/edit/submit') }}" >
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Edit Program</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$program->id}}">
                        <div class="form-group">
                            <label for="judul">Judul program</label>
                            <input type="text" name="judul" value="{{$program->name}}" class="form-control" id="judul" placeholder="judul program">
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail program</label>
                            <textarea id="summernote" name="program_info">{{$program->program_info}}</textarea>
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
@endsection



