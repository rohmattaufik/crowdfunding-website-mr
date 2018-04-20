@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tentang MR
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tentang MR</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Tentang MR</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{url('admin/system_about/edit/1')}}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip"
                        title="Edit">
                  <i class="fa fa-edit"></i></a>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
                @if(count($systems) == 0)
                    no info 
                @else
                    @foreach ($systems as $system)
                        <p>{!! html_entity_decode($system->content) !!}</p>
                    @endforeach
                @endif
            </div>
          </div>   
    </section>
    <!-- /.content -->

@endsection

<!-- 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin -- System Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="{{url('admin/system_about/create')}}">Add Info</a><br>
    @if(count($systems) == 0)
        no info 
    @else
        @foreach ($systems as $system)
            <h3>{{$system->name}}</h3>
            <p>{{$system->content}}</p>
            <a href="{{url('admin/system_about/edit/'.$system->id)}}">edit</a>
            <a href="{{url('admin/system_about/delete/'.$system->id)}}">delete</a>
            <hr>
        @endforeach
    @endif
</body>
</html> -->