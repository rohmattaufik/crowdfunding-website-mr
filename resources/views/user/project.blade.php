@extends('user.layout.layouts')
@section('content')
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="{{URL::asset('LogicFree/assets/images/logo-madrasah-relawan.png')}}"/>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="{{url('/')}}">BERANDA</a></li>
                                                <li><a href="{{url('tentang-mr')}}">TENTANG</a></li>
                                                <li><a href="{{url('program')}}">PROGRAM</a></li>
                                                <li><a href="#home">PROJECT</a></li>
                                                <li><a href="">RUANG RELAWAN</a></li>
                                                <li><a href="{{url('daftar_relawan')}}">DAFTAR RELAWAN</a></li>
												<li><a href="{{url('usulan')}}">USULKAN PENERIMA MANFAAT</a></li>
                                                <li><a href="{{url('kontak')}}">KONTAK</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <section id="home" class="home" style="padding-bottom:7em;">
            </section>


            <section id="service" class="service" style="padding-bottom:12em;">
                    <div class="container">
                                <div class="row">
                                        <div class="col-sm-12">
                                            <div class="single_tab_content">
                                                <div class="head_title" style="padding-top:3em;">
                                                    <h3>Project</h3>
                                                    <div class="separator"></div>
                                                </div>
                                                <div class="col-sm-12">
                                                <form class="form-horizontal" role="form" method="post" action="{{url('project')}}">
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="col-sm-2 control-label"><h4 class="pull-left">Pilih Program</h4></label>
                                                        <div class="col-sm-10">
                                                            {{ csrf_field() }}
                                                            <select class="form-control" name="id_program">
                                                                @foreach($programs as $program)
                                                                @if(count($projects) >0 and $program->id == $id_program)
                                                                <option value="{{$program->id}}" selected="true">{{$program->name}}</option>
                                                                @else
                                                                <option value="{{$program->id}}">{{$program->name}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2 col-sm-offset-10">
                                                            <input type="submit" class="btn btn-success" value="Cari project">
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                                <div>
                                                <div class="col-sm-12" style="padding-bottom:3em;">        
                                                    <h3>PROJECT PADA PROGRAM A</h3>
                                                    <hr>
                                                </div>
                                                <div class="col-sm-12">
                                                @if(count($projects) >0 )
                                                @foreach($projects as $project)
                                                <div class="col-sm-4">
                                                    <div class="thumbnail">
                                                        <img src="{{URL::asset($project->image)}}" alt="...">
                                                        <div class="caption">
                                                            <h3>{{$project->title}}</h3>
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="col-sm-6">
                                                                    <p>Target dana : </p>
                                                                </div>
                                                            <div class="col-sm-6 pull-right">
                                                                <p>Rp {{ number_format($project->target_dana,2,',','.')}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 pull-right" style="border-bottom: 1px solid grey;">
                                                            <div class="col-sm-6">
                                                                    <p>Dibuka hingga : </p>
                                                            </div>
                                                            <div class="col-sm-6 pull-right">
                                                                    <p>{{$project->date_close}}</p>
                                                            </div>
                                                        </div>
                                                        <p>{!! html_entity_decode(substr($project->deskripsi, 0, 500)) !!}</p>
                                                        <div class="skillbar" data-percent="{{($project->dana_terkumpul/$project->target_dana)*100}}%">
                                                            <div class="skillbar-title"><p class="blue"><strong>Progress</strong></p><span class="sm-text">{{ number_format((float)$project->dana_terkumpul/$project->target_dana*100 , 2, '.', '') }} %</span></div>
                                                            <div class="skillbar-bar blue"></div>
                                                        </div>
                                                        <p><a href="{{url('view_project/'.$project->id)}}" class="btn btn-default" role="button">Lihat Project</a></p>
                                                    </div>
                                                    </div>
                                                @endforeach
                                                @else
                                                Belum ada project
                                                @endif
                                                </div>
                                        </div>
                                    </div>

                        
                    </div>
                </section>

                @include('user.layout.footer')



        </div>

        @endsection
