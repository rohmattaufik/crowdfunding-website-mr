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
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Detail Pendaftaran Relawan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                @if($recrutment->is_publish == 0)
                <a href="{{url('admin/recrutment/term/publish/'.$recrutment->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip"
                    title="Aktifkan Masa Pendaftaran"><i class="fa fa-check-circle"></i></a>
                @else
                <a href="{{url('admin/recrutment/term/unpublish/'.$recrutment->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
                    title="Nonaktifkan Masa Pendaftaran"><i class="fa fa-times"></i></a>
                @endif
                <a href="{{url('admin/recrutment/term/edit/'.$recrutment->id)}}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip"
                        title="Edit Masa Pendaftaran">
                  <i class="fa fa-edit"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
                <h2 class="text-center">{{ $recrutment->title}}</h2>
                <h5  class="text-center">Masa Pendaftaran : {{$recrutment->date_start}} hingga {{$recrutment->date_finish}}</h5>
                <p>{!! html_entity_decode($recrutment->description) !!}</p>
                
            </div>
          </div>   

          <!-- quick email widget -->
          <div class="box box-default">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Tambah Pertanyaan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/recrutment/term/'.$recrutment->id.'/question/add')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah Pertanyaan">
                  <i class="fa fa-plus"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
            <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th width="70%">Pertanyaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $key => $question)
                <tr>
                    <td>{{++$key}}</td>
                    <td width="70%"><strong>Tipe Jawaban : {{$question->answer_type}}</strong> 
                          <br> {!! html_entity_decode($question->question) !!}</td>
                    <td>
                    <a href="{{url('admin/recrutment/question/'.$question->id.'/edit')}}" class="btn btn-warning" data-toggle="tooltip"
                          title="Edit Pertanyaan"><i class="fa fa-edit"></i></a>
                      <a href="{{url('admin/recrutment/question/'.$question->id.'/delete')}}" class="btn btn-danger" data-toggle="tooltip"
                          title="Hapus Pertanyaan"><i class="fa fa-times"></i></a>
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

