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




            <section id="home" class="home" style="padding-bottom:7em;">
            </section>

            <section id="features" class="features">
                <div class="container">
                    <div class="row">
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
                        <div class="col-sm-12">
                            <div class="main_features_area sections">
                                <div class="head_title">
                                    <h3>{{$project->title}}</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="row">
                                    <div class="main_features_content">

                                        <div class="col-sm-6">
                                            <div class="single_ft_s_item">
                                                <img src="{{URL::asset($project->image)}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single_features_text">
                                                <div class="col-sm-12 col-md-12" style="border-bottom : 1px solid grey;">
                                                    <div class="col-sm-6">
                                                        <p>Target dana : </p>
                                                    </div>
                                                    <div class="col-sm-6 pull-right">
                                                        <p>Rp {{ number_format($project->target_dana,2,',','.')}}</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Dana Terkumpul : </p>
                                                    </div>
                                                    <div class="col-sm-6 pull-right">
                                                        <p>Rp {{ number_format($project->dana_terkumpul,2,',','.')}}</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Dibuka Hingga : </p>
                                                    </div>
                                                    <div class="col-sm-6 pull-right">
                                                        <p>{{$project->date_close}}</p>
                                                    </div>
                                                </div>
                                                <p style="padding-top:5em;">{!! html_entity_decode($project->deskripsi) !!} </p>
                                                <div class="skillbar" data-percent="{{($project->dana_terkumpul/$project->target_dana)*100}}%">
                                                    <div class="skillbar-title"><p class="blue"><strong>Progress</strong> ( {{ number_format((float)$project->dana_terkumpul/$project->target_dana*100 , 2, '.', '') }} % )  </p></div>
                                                    <div class="skillbar-bar blue"></div>
                                                </div>
                                                <a href="" class="btn" data-toggle="modal" data-target="#myModal">DONASI</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2">
                            <h4>Daftar Pendonor</h4>
                            <div class="bs-example" data-example-id="bordered-table">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($pendonasi)>0)
                                    @foreach($pendonasi as $key => $donatur)
                                    <tr>
                                    <th>{{$key+1}}</th>
                                    @if($donatur->is_anonim == 1)
                                    <td>Hamba Allah</td>
                                    @else
                                    <td>{{$donatur->nama}}</td>
                                    @endif
                                    <td>{{$donatur->jumlah}}</td>
                                    <td>{{$donatur->tanggal_transfer}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                    Belum ada pendonor
                                    </tr>
                                    @endif
                                </tbody>
                                </table>
                            </div><!-- /example -->
                        </div>
                    </div>
                </div>
            </section>


            

                @include('user.layout.footer')



        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:orange;">DONASI {{$project->title}}</h4>
            </div>
            <div class="modal-body">
                Terima kasih telah bersedia untuk berdonasi pada proyek <strong>{{$project->title}}</strong><br>
                Isikan data berikut, kemudian lakukan pembayaran dan konfirmasi<br>
                <form method="post" action="{{url('donasi')}}">
                    {{ csrf_field()}}

                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" value="1" name="anonim"> Donasi sebagai "Hamba Allah" ?
                        </label>
                    </div>
                    <label>Jumlah Donasi</label>
                    <div class="input-group"> 
                        <span class="input-group-addon">Rp</span>
                        <input type="number" name="jumlah" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>

        @endsection
