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
                                                <li><a href="{{url('news')}}">RUANG RELAWAN</a></li>
                                                <li><a href="{{url('daftar_relawan')}}">DAFTAR RELAWAN</a></li>
												<li><a href="{{url('usulan')}}">USULKAN PENERIMA MANFAAT</a></li>
                                                <li><a href="#home">KONTAK</a></li>
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
            


            <section id="contact" class="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                            @if(Session::get('success') != null)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr/>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                                            {{ Session::get('success') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(Session::get('failed') != null)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr/>
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Gagal!</h4>
                                            {{ Session::get('failed') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                                <div class="row">
                                    <div class="contact_contant sections">
                                        <div class="col-sm-6">
    
                                            <div class="main_contact_info">
                                                <div class="head_title">
                                                    <h3>INFORMASI KONTAK</h3>
                                                    <div class="separator"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="contact_info_content">
                                                        <p>Madrasah Relawan merangkul pemuda muslim untuk menebar manfaat bagi ummat
                                                        </p>
                                                        <div class="col-sm-12">
                                                            <div class="single_contact_info">
                                                                <div class="single_info_icon">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="single_info_text">
                                                                    <h3>Kantor</h3>
                                                                    <p>Gedung Laznas Dewan Dakwah Lantai 5<br>
                                                                    Jl Panjang no 12, Kebon Jeruk, Jakarta Barat<br>
                                                                    Provinsi DKI Jakarta
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="single_contact_info">
                                                                <div class="single_info_icon">
                                                                    <i class="fa fa-envelope-o"></i>
                                                                </div>
                                                                <div class="single_info_text">
                                                                    <h3>Email</h3>
                                                                    <p>madrasahrelawan@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="single_contact_info">
                                                                <div class="single_info_icon">
                                                                    <i class="fa fa-mobile"></i>
                                                                </div>
                                                                <div class="single_info_text">
                                                                    <h3>Telepon</h3>
                                                                    <p>081290009577</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="single_contact_info">
                                                                <div class="single_info_icon">
                                                                    <i class="fa fa-clock-o"></i>
                                                                </div>
                                                                <div class="single_info_text">
                                                                    <h3>Intagram</h3>
                                                                    <p>@madrasahrelawan</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
    
                                        <div class="col-sm-6">
                                            <div class="head_title">
                                                <h3>KIRIM PESAN</h3>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="single_contant_left">
                                                <form method="post" action="{{url('message/submit')}}" id="formid">
                                                    <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="first_name" placeholder="First Name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="">
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                                    </div>
    
                                                    <div class="">
                                                        <input type="submit" value="Submit" class="btn btn-primary">
                                                    </div>
                                                    <!--</div>--> 
                                                </form>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>  <!-- End of contact section -->
    
    

            

                @include('user.layout.footer')


        </div>

@endsection