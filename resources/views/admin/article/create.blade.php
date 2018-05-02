@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ruang Relawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Ruang Relawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{ url('admin/article/create/submit') }}" enctype="multipart/form-data">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Tambah Ruang Relawan</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="title" class="form-control" id="judul">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                                <option value="0">Kabar MR</option>
                                <option value="1">Kisah Relawan</option>
                                <option value="2">Kabar Terbaru</option>
                                <option value="3">Testimoni Relawan</option>
                                <option value="4">Testimoni Penerima Manfaat</option>
                                <option value="5">Portofolio</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputFile">Gambar</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="detail">Konten</label>
                            <textarea id="summernote" name="content"></textarea>
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
