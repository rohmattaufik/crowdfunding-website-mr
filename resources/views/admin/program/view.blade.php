@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Program
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Program</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Detail Program</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                @if($program->flag_active == 0)
                <a href="{{url('admin/program/activate/'.$program->id)}}" type="button" class="btn btn-success btn-sm" data-toggle="tooltip"
                        title="Aktifkan Program">
                  <i class="fa fa-check-circle"></i></a>
                @else
                <a href="{{url('admin/program/nonactivate/'.$program->id)}}" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip"
                        title="Nonaktifkan Program">
                  <i class="fa fa-times"></i></a>
                @endif
                <a href="{{url('admin/program/edit/'.$program->id)}}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip"
                        title="Edit Program">
                  <i class="fa fa-edit"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
                <h2 class="text-center">{{$program->name}}</h2>
                <p>{!! html_entity_decode($program->program_info) !!}</p>
                
            </div>
          </div>   

          <!-- quick email widget -->
          <div class="box box-default">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Dokumentasi Program</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/program/'.$program->id.'/documentation/create')}}" type="button" class="btn btn-info btn-sm" data-toggle="tooltip"
                        title="Edit Program">
                  <i class="fa fa-plus"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
            <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th width="70%">Doumentasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documentations as $key => $documentation)
                <tr>
                    <td>{{++$key}}</td>
                    <td width="70%"><img src="{{ URL::asset($documentation->dokumentation_url)}}" style="height:200px;"> 
                          <br> {!! html_entity_decode($documentation->dokumentation_name) !!}</td>
                    <td>
                    <a href="{{url('admin/program/documentation/'.$documentation->id.'/edit')}}" class="btn btn-warning" data-toggle="tooltip"
                          title="Edit Dokumentasi"><i class="fa fa-edit"></i></a>
                      <a href="{{url('admin/program/documentation/delete/'.$documentation->id)}}" class="btn btn-danger" data-toggle="tooltip"
                          title="Hapus Dokumentasi"><i class="fa fa-times"></i></a>
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
