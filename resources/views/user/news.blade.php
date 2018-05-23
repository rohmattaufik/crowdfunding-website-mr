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
                                                <li><a href="{{url('project')}}">PROJECT</a></li>
                                                <li><a href="#home">RUANG RELAWAN</a></li>
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




            <section id="home" style="padding-bottom:7em;" class="home">
            </section>

            <section id="service" class="service" style="padding-bottom:5em;">
                <div class="container">
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single_tab_content">
                                            <div class="head_title" style="padding-top:3em;">
                                                <h3>Ruang Relawan</h3>
                                                <div class="separator"></div>
                                            </div> 
                                            <div>
                                            <div class="col-sm-12">
                                            @if(count($news)>0)
                                            @foreach($news as $berita)
                                            <div class="col-sm-4">    
                                                <div class="thumbnail">
                                                <img src="{{URL::asset($berita->image)}}" alt="...">
                                                <div class="caption">
                                                    <h3>{{$berita->title}}</h3>
                                                    <p>{!! substr(html_entity_decode($berita->content),0,600) !!}</p>
                                                    <p> <a href="{{url('view_news/'.$berita->id)}}" class="btn btn-default" role="button">Baca</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <p>Belum ada berita</p>
                                            @endif                                            
                                        </div>
                                    </div>
                                </div>
                </div>
            </section>
            



            @include('user.layout.footer')



        </div>

@endsection