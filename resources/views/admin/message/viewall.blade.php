@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pesan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Pesan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Judul</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesans as $pesan)
                        @if($pesan->is_read == 0)
                        <tr style="background-color : greenyellow;">
                            <td>{{$pesan->first_name . ' ' . $pesan->last_name}}</td>
                            <td>{{$pesan->email}}</td>
                            <td>{{$pesan->subject}}</td>
                            <td>{{$pesan->pesan}}</td>
                            <td>{{$pesan->created_at}}</td>
                        </tr>
                        @else
                        <tr>
                            <td>{{$pesan->first_name . ' ' . $pesan->last_name}}</td>
                            <td>{{$pesan->email}}</td>
                            <td>{{$pesan->subject}}</td>
                            <td>{{$pesan->pesan}}</td>
                            <td>{{$pesan->created_at}}</td>
                        </tr>
                        @endif
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



