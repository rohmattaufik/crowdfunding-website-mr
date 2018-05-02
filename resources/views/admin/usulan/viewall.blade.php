@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usulan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Usulan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Usulan Penerima Manfaat</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- <a href="{{url('admin/new-project')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah Program">
                  <i class="fa fa-plus">Tambah Project</i></a> -->
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pengusul</th>
                            <th>Email Pengusul</th>
                            <th>Nama Penerima Manfaat</th>
                            <th>Alamat Penerima Manfaat</th>
                            <th>Alasan</th>
                            <th>Tanggal</th
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usulans as $usulan)
                        <tr style="background-color:lightgreen;">
                            <td>{{$usulan->nama_pengusul}}</td>
                            <td>{{$usulan->email_pengusul}}</td>
                            <td>{{$usulan->nama_penerima_manfaat}}</td>
                            <td>{{$usulan->alamat}}</td>
                            <td>{{$usulan->alasan}}</td>
                            <td>{{$usulan->created_at}}</td>
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
