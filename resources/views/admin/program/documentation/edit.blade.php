@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Program
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lihat Program</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{ url('admin/program/documentation/edit/submit') }}" enctype="multipart/form-data" >
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Edit Dokumentasi Program</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id_documentation" value="{{$documentation->id}}">
                        <image src="{{URL::asset($documentation->dokumentation_url)}}">
                        <div class="form-group">
                            <label for="exampleInputFile">Dokumentasi Baru</label>
                            <p>Note : * Jika anda memasukkan gambar baru, gambar lama akan dihapus</p>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="detail">Info Dokumentasi</label>
                            <textarea id="summernote" name="documentation_name">{{$documentation->dokumentation_name}}</textarea>
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
    height: 150,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: true                  // set focus to editable area after initializing summernote
  });
});
 </script>
@endsection



