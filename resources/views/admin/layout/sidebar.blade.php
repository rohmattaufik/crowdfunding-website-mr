<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{url('admin')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Program</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/program')}}"><i class="fa fa-circle-o"></i> Lihat</a></li>
            <li><a href="{{url('admin/program/create')}}"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/project')}}"><i class="fa fa-circle-o"></i> Lihat</a></li>
            <li><a href="{{url('admin/new-project')}}"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Ruang Relawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/ruang_relawan')}}"><i class="fa fa-circle-o"></i> Lihat</a></li>
            <li><a href="{{url('admin/tambah_ruang_relawan')}}"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Pendaftaran Relawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/recrutment/term')}}"><i class="fa fa-circle-o"></i> Lihat</a></li>
            <li><a href="{{url('admin/create/recrutment/term')}}"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>
        <li >
          <a href="{{url('/admin/usulan_penerima_manfaat')}}">
            <i class="fa fa-edit"></i> <span>Usulan Penerima Manfaat</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>