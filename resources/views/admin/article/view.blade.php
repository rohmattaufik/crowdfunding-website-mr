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

              <h3 class="box-title">Ruang Relawan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                @if($article->flag_active == 0)
                <a href="{{url('admin/project/publish/'.$article->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip"
                    title="Aktifkan Project"><i class="fa fa-check-circle"></i></a>
                @else
                <a href="{{url('admin/project/unpublish/'.$article->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
                    title="Nonaktifkan Project"><i class="fa fa-times"></i></a>
                @endif
                <a href="{{url('admin/ruang_relawan/edit/'.$article->id)}}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip"
                        title="Edit Project">
                  <i class="fa fa-edit"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
                <h2 class="text-center">{{ $article->title}}</h2>
                @if($article->category == 0)
                <h4 class="text-center">Kategori Kabar MR</h4>
                @elseif($article->category == 1)
                <h4 class="text-center">Kategori Kisah Relawan</h4>
                @elseif($article->category == 2)
                <h4 class="text-center">Kategori Kabar Terbaru</h4>
                @elseif($article->category == 3)
                <h4 class="text-center">Kategori Testimoni Relawan</h4>
                @elseif($article->category == 4)
                <h4 class="text-center">Kategori Testimoni Penerima Manfaat</h4>
                @elseif($article->category == 5)
                <h4 class="text-center">Kategori Portofolio</h4>
                @endif

                <div class="col-md-5">
                    <img src="{{URL::asset($article->image)}}" style="width: 80%; text-align:center">
                </div>
                <div class="col-md-7">
                    <p>{!! html_entity_decode($article->content) !!}</p>
                </div>
                
                
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

