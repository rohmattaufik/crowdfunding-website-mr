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
                                                <li><a href="#home">BERANDA</a></li>
                                                <li><a href="{{url('tentang-mr')}}">TENTANG</a></li>
                                                <li><a href="{{url('program')}}">PROGRAM</a></li>
                                                <li><a href="{{url('project')}}">PROJECT</a></li>
                                                <li><a href="{{url('news')}}">RUANG RELAWAN</a></li>
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




            <section id="home" class="home" style="background:url({{URL::asset('image/madrasah_relawan4.jpg')}}) no-repeat 100% 100%">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>SELAMAT DATANG DI MADRASAH RELAWAN</h1>
                                            <p>#MariBerjuang</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-primary">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>WELCOME TO OUR LOGIC</h1>
                                            <p>We Make Awesome Theme For Your Business</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-primary">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>WELCOME TO OUR LOGIC</h1>
                                            <p>We Make Awesome Theme For Your Business</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-primary">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_features_area sections">
                                <div class="head_title">
                                    <h3>PROJECT PILIHAN</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="row">
                                    <div class="main_features_content">

                                        <div class="col-sm-6">    
                                            <div class="single_ft_s_item">
                                                <img src="{{URL::asset($project_pilihan->image)}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_features_text">
                                                <h4>{{$project_pilihan->title}}</h4>
                                                <ul>
                                                    <li><span>Tanggal Tutup:</span> {{$project_pilihan->date_close}}</li>
                                                    <li><span>Jumlah Dana  :</span> Rp {{ number_format($project_pilihan->target_dana,2,',','.')}}</li>
                                                    <li><span>Dana Terkumpul  :</span> Rp {{ number_format($project_pilihan->dana_terkumpul,2,',','.')}}</li>
                                                </ul>
                                                <hr>
                                                <p>{!! html_entity_decode(substr($project_pilihan->deskripsi,0,500)) !!}</p><br>
                                                <div class="skillbar" data-percent="{{($project_pilihan->dana_terkumpul/$project_pilihan->target_dana)*100}}%">
                                                    <div class="skillbar-title"><p class="blue"><strong>Progress</strong></p><span class="sm-text">{{ number_format((float)$project_pilihan->dana_terkumpul/$project_pilihan->target_dana*100 , 2, '.', '') }} %</span></div>
                                                    <div class="skillbar-bar blue"></div>
                                                </div>
                                                <a href="" class="btn">Lihat Project</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section id="service" class="service" style="padding-bottom:5em;">
                <div class="container">
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single_tab_content">
                                            <div class="head_title" style="padding-top:3em;">
                                                <h3>Project LAINNYA</h3>
                                                <div class="separator"></div>
                                            </div>
                                            
                                            <div>
                                            
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
                                <div class="pull-right">
                                    <a href="" class="btn" style="background:white;color:black;">Lihat Semua Proyek</a>
                                </div>
                    
                </div>
            </section>
            <hr>
            <section id="othersservice" class="othersservice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_othersservice_area sections">
                                <div class="row">
                                    <div class="head_title">
                                        <h3>PPROGRAM KAMI</h3>
                                        <div class="separator"></div>
                                    </div>

                                    <div class="main_othersservice_content">
                                        @if(count($programs) > 0)
                                        @foreach($programs as $program)
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4><span><i class="fa fa-television"></i></span> {{$program->name}}</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>{!! html_entity_decode(substr($program->program_info,0,500))!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>            

            <section id="counter" class="counter">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">  
                            <div class="col-sm-12">               
                                <div class="main_counter_area text-center">

                                    <div class="row">
                                        <div class="single_counter border_right">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">561</h2>
                                                    <i class="icon icon-thumbs-up"></i>
                                                    <p class="margin-top-20">DONASI</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">25</h2>
                                                    <i class="icon icon-business-3"></i>
                                                    <p class="margin-top-20">LOKASI</p>  
                                                </div>

                                            </div>
                                        </div> 

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">236</h2>
                                                    <i class="icon icon-people-32"></i>
                                                    <p class="margin-top-20">PENERIMA MANFAAT</p>  
                                                </div>

                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter">365</h2>
                                                    <i class="icon icon-cup"></i>
                                                    <p class="margin-top-20">RELAWAN</p> 
                                                </div>

                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  <!-- End of counter section -->



            <!-- <section id="maps" class="maps">
                <div class="map-overlay">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="main_maps text-center">
                                <div class="col-sm-12 no-padding">
                                    <div class="map_canvas_icon">
                                        <i class="fa fa-map-marker" onClick="showmap()"></i>
                                        <h2 onClick="showmap()">FIND US ON GOOGLE MAP</h2>
                                    </div>
                                    <div id="map_canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->



            

            

            @include('user.layout.footer')



        </div>

@endsection