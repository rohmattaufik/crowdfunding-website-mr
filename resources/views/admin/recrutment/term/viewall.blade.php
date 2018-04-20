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

              <h3 class="box-title">Masa Pendaftaran Relawan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/create/recrutment/term')}}"  class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah Masa Pendaftaran">
                  <i class="fa fa-plus">Tambah Masa Pendaftaran</i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Mulai Pendaftaran</th>
                            <th>Selesai Pendaftaran</th>
                            <th>Status Publish</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recrutments as $recrutment)
                        <tr>
                            <td>{{$recrutment->title}}</td>
                            <td>{!! strip_tags(substr($recrutment->description,0,1000)) !!} . . .</td>
                            <td>{{$recrutment->date_start}}</td>
                            <td>{{$recrutment->date_finish}}</td>
                            <td>@if($recrutment->is_publish == 1) 
                                    Aktif 
                                @else 
                                    Non Aktif
                                @endif    
                            </td>
                            <td> 
                                <a href="{{url('admin/recrutment/term/'.$recrutment->id)}}" class="btn btn-info" data-toggle="tooltip"
                                    title="Lihat Masa Pendaftaran"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/recrutment/term/edit/'.$recrutment->id)}}" class="btn btn-warning" data-toggle="tooltip"
                                    title="Update Masa Pendaftaran"><i class="fa fa-edit"></i></a>
                                @if($recrutment->is_publish == 0)
                                <a href="{{url('admin/recrutment/term/publish/'.$recrutment->id)}}" class="btn btn-success" data-toggle="tooltip"
                                    title="Aktifkan Masa Pendaftaran"><i class="fa fa-check-circle"></i></a>
                                @else
                                <a href="{{url('admin/recrutment/term/unpublish/'.$recrutment->id)}}" class="btn btn-danger" data-toggle="tooltip"
                                    title="Nonaktifkan Masa Pendaftaran"><i class="fa fa-times"></i></a>
                                @endif
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


