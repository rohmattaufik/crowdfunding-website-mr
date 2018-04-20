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

              <h3 class="box-title">Detail Project</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                @if($project->is_publish == 0)
                <a href="{{url('admin/project/publish/'.$project->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip"
                    title="Aktifkan Project"><i class="fa fa-check-circle"></i></a>
                @else
                <a href="{{url('admin/project/unpublish/'.$project->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip"
                    title="Nonaktifkan Project"><i class="fa fa-times"></i></a>
                @endif
                <a href="{{url('admin/project/edit/'.$project->id)}}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip"
                        title="Edit Project">
                  <i class="fa fa-edit"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                
                <h2 class="text-center">{{ $project->title}}</h2>
                <h4 class="text-center">Program {{ $project['program']->name}}</h4>
                <h4 class="text-center">Target Dana : {{ $project->target_dana}}</h4>
                <h4 class="text-center">Dana Terkumpul : {{ $project->dana_terkumpul}}</h4>
                <h5  class="text-center">Masa Pendaftaran : {{$project->date_start}} hingga {{$project->date_close}}</h5>
                <div class="col-md-5">
                    <img src="{{URL::asset($project->image)}}" style="width: 80%; text-align:center">
                </div>
                <div class="col-md-7">
                    <p>{!! html_entity_decode($project->deskripsi) !!}</p>
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

