@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ruang Relawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Ruang Relawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <form method="post" action="{{ url('admin/article/edit/submit') }}" enctype="multipart/form-data">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Edit Ruang Relawan</h3>
                </div>
                <div class="box-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$article->id}}">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="title" class="form-control" id="judul" value="{{$article->title}}">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category">
                                @if($article->category == 0)
                                <option value="0" selected="true">Kabar MR</option>
                                @else
                                <option value="0">Kabar MR</option>
                                @endif
                                @if($article->category == 1)
                                <option value="1" selected="true">Kisah Relawan</option>
                                @else
                                <option value="1">Kisah Relawan</option>
                                @endif
                                @if($article->category == 2)
                                <option value="2" selected="true">Kabar Terbaru</option>
                                @else
                                <option value="2">Kabar Terbaru</option>
                                @endif
                                @if($article->category == 3)
                                <option value="3" selected="true">Testimoni Relawan</option>
                                @else
                                <option value="3">Testimoni Relawan</option>
                                @endif
                                @if($article->category == 4)
                                <option value="4" selected="true">Testimoni Penerima Manfaat</option>
                                @else
                                <option value="4">Testimoni Penerima Manfaat</option>
                                @endif
                                @if($article->category == 5)
                                <option value="5" selected="true">Portofolio</option>
                                @else
                                <option value="5">Portofolio</option>
                                @endif
                                
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputFile">Gambar</label><br>
                            <i>Pilih gambar jika ingin mengganti dengan gambar baru</i>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="detail">Konten</label>
                            <textarea id="summernote" name="content">{{$article->content}}</textarea>
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

