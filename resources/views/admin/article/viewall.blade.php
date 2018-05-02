@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ruang Relawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ruang Relawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Reang Relawan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/tambah_ruang_relawan')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah">
                  <i class="fa fa-plus">Tambah</i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10%">Judul</th>
                            <th width="25%">Konten</th>
                            <th width="15%">Gambar</th>
                            <th width="10%">Status</th>
                            <th width="10%">Kategori</th>
                            <th width="10%">Tanggal Buat</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{$article->title}}</td>
                            <td>{!! html_entity_decode(substr($article->content,0,1000)) !!} ...</td>
                            <td><img src="{{URL::asset($article->image)}}" style="width:100%"></td>
                            <td>@if($article->flag_active == 1) 
                                    Sudah Dipublikasikan 
                                @else 
                                    Belum Dipublikasikan
                                @endif    
                            </td>
                            <td>@if($article->category == 0) 
                                    Agenda MR 
                                @elseif($article->category == 1) 
                                    Kisah Relawan
                                @elseif($article->category == 2) 
                                    Kabar Terbaru
                                @elseif($article->category == 3) 
                                    Testimoni Relawan
                                @elseif($article->category == 4) 
                                    Testimoni Penerima Manfaat
                                @elseif($article->category == 5) 
                                    Portofolio
                                @endif
                            </td>
                            <td>{{$article->created_at}}</td>
                            <td> 
                                <a href="{{url('admin/ruang_relawan/'.$article->id)}}" class="btn btn-info" data-toggle="tooltip"
                                    title="Lihat Artikel"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/ruang_relawan/edit/'.$article->id)}}" class="btn btn-warning" data-toggle="tooltip"
                                    title="Update Artikel"><i class="fa fa-edit"></i></a>
                   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>   
    </section>
    <!-- /.content -->

@endsection

@section('script')
<script>
  $(function () {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@endsection



