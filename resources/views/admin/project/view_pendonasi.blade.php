@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Donations</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Daftar Pendonasi Project {{$project->title}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/project/'.$project->id)}}" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip"
                        title="Tambah Program">
                  <i class="fa fa-times"> Kembali</i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Nama Rekening</th>
                            <th>Bank Asal</th>
                            <th>Bank Tujuan</th>
                            <th>Tanggal Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donations as $donation)
                        <tr>
                            <td>{{$donation->nama}}</td>
                            <td>{{$donation->email}}</td>
                            <td>{{$donation->jumlah}}</td>
                            @if($donation->is_confirmation == 0)
                            <td style="opacity:0.5;">Belum Konfirmasi</td>
                            @else
                            <td>Konfirmasi</td>
                            @endif
                            <td>{{$donation->nama_rekening}}</td>
                            <td>{{$donation->bank_asal}}</td>
                            <td>{{$donation->bank_tujuan}}</td>
                            <td>{{$donation->tanggal_transfer}}</td>
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
