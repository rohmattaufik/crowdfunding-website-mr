@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{count($projects)}}</h3>

              <p>Project</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('admin/project')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count($messages)}}</h3>

              <p>Pesan Baru</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('admin/messages')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($unconfirm_donation)}}</h3>

              <p>Donasi Belum Konfirmasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('admin/project')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count($usulan)}}</h3>

              <p>Usulan Penerima Baru</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('admin/usulan_penerima_manfaat')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

      <!-- Chat box -->
      <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-envelope-o"></i>

              <h3 class="box-title">Message</h3>

            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              @if(count($messages) > 0)
              @foreach($messages as $message)
              <div class="item">
                <img src="{{URL::asset('AdminLTE/dist/img/user4-128x128.jpg')}}" alt="user image">

                <p class="message">
                  <a class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$message->created_at}}</small>
                    {{$message->first_name}} {{$message->last_name}}
                  </a>
                  {{$message->pesan}}
                </p>
              </div>
              @endforeach
              @else
                No new message
              @endif
            </div>
            <!-- /.chat -->
            <div class="box-footer">
            </div>
          </div>
          <!-- /.box (chat box) -->

          </section>
          </div>


      </section>

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

