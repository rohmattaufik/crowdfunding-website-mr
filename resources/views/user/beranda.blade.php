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




            <section id="home" class="home">
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

                                            <div class="single_features_slide">
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                                <div class="single_ft_s_item">
                                                    <img src="assets/images/featureslid1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_features_text">
                                                <h4>HAND WITH A WATCH</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                    when an unknown printer took a galley of type and scrambled </p>

                                                <ul>
                                                    <li><span>Client:</span> Dadit Lorm</li>
                                                    <li><span>Deivered:</span> Sunday, 15 August, 2015</li>
                                                    <li><span>Tags:</span> Hand, Watch, Black, Tree</li>
                                                </ul>

                                                <a href="" class="btn">LAUNCH NOW</a>
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
                                            <div class="col-sm-4">
                                                
                                                
                                                <div class="thumbnail">
                                                <img src="assets/images/featureslid1.jpg" alt="...">
                                                <div class="caption">
                                                    <h3>Thumbnail label</h3>
                                                    <div class="col-sm-12 col-md-12">
                                                        <div class="col-sm-6">
                                                                <p>Target dana : </p>
                                                        </div>
                                                        <div class="col-sm-6 pull-right">
                                                                <p>Rp 1000.000,-</p>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 pull-right" style="border-bottom: 1px solid grey;">
                                                            <div class="col-sm-6">
                                                                    <p>Dibuka hingga : </p>
                                                            </div>
                                                            <div class="col-sm-6 pull-right">
                                                                    <p>14 Februari 2018</p>
                                                            </div>
                                                    </div>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    <div class="skillbar" data-percent="79%">
                                                        <div class="skillbar-title"><p class="blue"><strong>Progress</strong></p><span class="sm-text">79%</span></div>
                                                        <div class="skillbar-bar blue"></div>
                                                    </div>
                                                    <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="col-sm-4">
                                                <div class="thumbnail">
                                                <img src="assets/images/featureslid1.jpg" alt="...">
                                                <div class="caption">
                                                    <h3>Thumbnail label</h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="col-sm-4">
                                                <div class="thumbnail">
                                                <img src="assets/images/featureslid1.jpg" alt="...">
                                                <div class="caption">
                                                    <h3>Thumbnail label</h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-sm-4">
                                                    <div class="thumbnail">
                                                    <img src="assets/images/featureslid1.jpg" alt="...">
                                                    <div class="caption">
                                                        <h3>Thumbnail label</h3>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4><span><i class="fa fa-clock-o"></i></span> AIR BUAT SEDULUR</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-picture-o"></i></span> WEB DEVELOPMENT</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-television"></i></span> VIDEO EDITING</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-object-group"></i></span> MARKETING</h4>
                                                </div>
                                                <div class="single_othersservice_content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="single_othersservice_icon">
                                                    <h4> <span><i class="fa fa-object-group"></i></span> PHOTOGRAPHY</h4>
                                                </div>
                                                <div class="single_othersservice_content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="single_othersservice">
                                                <div class="s_ot_i_area">
                                                    <div class="single_othersservice_icon">
                                                        <h4><span><i class="fa fa-object-group"></i></span> LOGO DESIGN</h4>
                                                    </div>
                                                </div>
                                                <div class="single_othersservice_content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>

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



            <section id="maps" class="maps">
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
            </section>



            

            

            @include('user.layout.footer')



        </div>

@endsection