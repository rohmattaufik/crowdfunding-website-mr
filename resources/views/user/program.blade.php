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
                                                <li><a href="">BERANDA</a></li>
                                                <li><a href="">TENTANG</a></li>
                                                <li><a href="#home">PROGRAM</a></li>
                                                <li><a href="">PROJECT</a></li>
                                                <li><a href="">RUANG RELAWAN</a></li>
                                                <li><a href="">DAFTAR RELAWAN</a></li>
												<li><a href="">USULKAN PENERIMA MANFAAT</a></li>
                                                <li><a href="">KONTAK</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <section id="home" class="home" style="padding-bottom:5em;">
            </section>


            <section id="service" class="service" style="padding-bottom:12em;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        <!-- Nav tabs -->
                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            @foreach($programs as $key => $program)
                                                @if($key==0)
                                                    <li role="presentation" class="active"><a href="#{{$program->id}}" aria-controls="{{$program->id}}" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />{{$program->name}}</a></li>
                                                @else
                                                <li role="presentation"><a href="#{{$program->id}}" aria-controls="{{$program->id}}" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i> <br />{{$program->name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            @foreach($programs as $key => $program)
                                            @if($key==0)
                                            <div role="tabpanel" class="tab-pane active" id="{{$program->id}}">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3>{{$program->name}}</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p>{!! html_entity_decode($program->program_info) !!}</p>

                                                                <a href="" class="btn btn-primary">LIHAT PROJECT</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_features_slide">
                                                                @foreach($program['documentation'] as $documentation)
                                                                <div class="single_ft_s_item">
                                                                    <img src="{{URL::asset($documentation->dokumentation_url)}}" alt="" />
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div role="tabpanel" class="tab-pane" id="{{$program->id}}">
                                                <div class="single_service_tab">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="single_tab_content">
                                                                <div class="head_title">
                                                                    <h3>{{$program->name}}</h3>
                                                                    <div class="separator"></div>
                                                                </div>
                                                                <p>{!! html_entity_decode($program->program_info) !!}</p>

                                                                <a href="" class="btn btn-primary">LIHAT PROJECT</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single_features_slide">
                                                                @foreach($program['documentation'] as $documentation)
                                                                <div class="single_ft_s_item">
                                                                    <img src="{{URL::asset($documentation->dokumentation_url)}}" alt="" />
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                @include('user.layout.footer')

        </div>

@endsection