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
            <form method="post" action="{{url('admin/recrutment/term/create/submit')}}" >
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Tambah Masa Pendaftaran Relawan</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="title"  placeholder="judul pendaftaran">
                        </div>
                        
                        <!-- Date -->
                        <div class="form-group col-md-6">
                            <label>Tanggal Mulai:</label>

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
                            <label>Tanggal Selesai:</label>

                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="date_finish"   class="form-control pull-right" id="datepicker2">
                            </div>
                            <!-- /.input group -->
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="detail">Deskripsi</label>
                            <textarea id="summernote"  name="description"></textarea>
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

<script type="text/javascript">

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

