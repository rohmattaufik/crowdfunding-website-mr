@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Project</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/new-project')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Tambah Program">
                  <i class="fa fa-plus">Tambah Project</i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Project</th>
                            <th>Nama Program</th>
                            <th>Tanggal Tutup</th>
                            <th>Target Dana</th>
                            <th>Dana Terkumpul</th>
                            <th>Status Tutup</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{$project->title}}</td>
                            <td>{{$project['program']->name}}</td>
                            <td>{{$project->date_close}}</td>
                            <td>{{$project->target_dana}}</td>
                            <td>{{$project->dana_terkumpul}}</td>
                            <td>@if($project->is_close == 1) 
                                    Project Ditutup 
                                @else 
                                    Project Terbuka
                                @endif    
                            </td>
                            <td> 
                                <a href="{{url('admin/project/'.$project->id)}}" class="btn btn-info" data-toggle="tooltip"
                                    title="Lihat Project"><i class="fa fa-eye"></i></a>
                                <a href="{{url('admin/project/edit/'.$project->id)}}" class="btn btn-warning" data-toggle="tooltip"
                                    title="Update Project"><i class="fa fa-edit"></i></a>
                                <!-- @if($project->flag_active == 0)
                                <a href="{{url('admin/project/activate/'.$project->id)}}" class="btn btn-success" data-toggle="tooltip"
                                    title="Aktifkan Program"><i class="fa fa-check-circle"></i></a>
                                @else
                                <a href="{{url('admin/program/nonactivate/'.$project->id)}}" class="btn btn-danger" data-toggle="tooltip"
                                    title="Nonaktifkan Program"><i class="fa fa-times"></i></a>
                                @endif -->
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
