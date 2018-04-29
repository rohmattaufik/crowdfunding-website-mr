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




            <section id="home" class="home" style="padding-bottom:5em;">
            </section>
            


            <section id="contact" class="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="contact_contant sections">
                                        <div class="col-sm-12">
                                            <div class="head_title">
                                                <h3>KONFIRMASI PEMBAYARAN</h3>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="single_contant_left">
                                                <form method="post" action="{{url('/submit_konfirmasi')}}">
                                                    {{ csrf_field()}}

                                                    @if ($donasi == null)
                                                    <input type="hidden" name="id_donasi">
                                                    @else
                                                    <input type="hidden" name="id_donasi" value="{{$donasi->id}}">
                                                    @endif
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-6">
                                                            <label for="select">Project</label>
                                                            <select id="select" class="form-control" name="id_project">
                                                            @if ($donasi == null)
                                                                @foreach($projects as $project)
                                                                <option value="{{$project->id}}" selected="true">{{$project->title}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="{{$project->id}}">{{$project->title}}</option>
                                                            @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6"> 
                                                            <label>Jumlah Donasi</label>
                                                            @if ($donasi == null)
                                                                <input type="number" name="jumlah" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />    
                                                            @else
                                                                <input type="number" name="jumlah" value="{{$donasi->jumlah}}" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            @if ($donasi == null)
                                                                <input type="email" class="form-control" name="email" id="email">
                                                            @else
                                                                <input type="email" class="form-control" name="email" id="email" value="{{$donasi->email}}" disabled="true">
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="nama">Nama</label>
                                                            @if ($donasi == null)
                                                                <input type="text" class="form-control" name="nama" id="nama">
                                                            @else
                                                                <input type="text" class="form-control" name="nama" id="nama" value="{{$donasi->nama}}" disabled="true">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-6">
                                                            <label for="nama_rekening">Nama Rekening</label>
                                                            <input type="text" class="form-control" name="nama_rekening" id="nama_rekening">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="tanggal">Tanggal</label>
                                                            <input type="text" class="form-control" name="tanggal" id="tanggal">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-6">
                                                            <label for="bank_asal">Bank Asal</label>
                                                            <input type="text" class="form-control" name="bank_asal" id="bank_asal">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="bank_tujuan">Bank Tujuan</label>
                                                            <input type="text" class="form-control" name="bank_tujuan" id="bank_tujuan">
                                                        </div>
                                                    </div>
                                                    

                                                    <button type="submit" class="btn btn-default">Submit</button>
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