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
                                                <li><a href="#home">TENTANG</a></li>
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




            <section id="home" class="home" style="padding-bottom:5em;">
            </section>

            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_features_area sections">
                                <div class="head_title">
                                    <h3>TENTANG MR</h3>
                                    <div class="separator"></div>
                                </div>
                                <div class="row">
                                    <div class="main_features_content">
                                        <div class="col-sm-12">
                                            <div class="single_features_text" style="text-align:justify;">
                                                <p>Sejak berdirinya Dewan Da’wah terus melahirkan pemuda yang siap mengabdi untuk bangsa Indonesia, 
                                                baik yang terjun di pedalaman negeri maupun perkotaan. Saat ini, untuk memperluas semangat mengabdi 
                                                serta menghimpun pemuda terbaik negeri ini maka hadirlah Madrasah Relawan. 
                                                </p>
                                                <p>Madrasah Relawan (MR) sebuah gerakan yang diinisiasi oleh LAZIS Dewan Da'wah, Madrasah Relawan 
                                                di bentuk dalam rangka merangkul pemuda muslim untuk bersama memberikan kebermanfaatan bagi ummat. 
                                                LAZNAS Dewan Da'wah berada dibawah naungan Yayasan Dewan Da'wah yang berdiri pada tahun 1967 dan 
                                                merupakan salah satu Lembaga Amil Zakat Nasional (SK Kemenag no 712 tahun 2016). 
                                                </p>
                                                <p>Madrasah Relawan (MR) mulai dilaksanakan pada saat bencana banjir nasional Garut, pada bulan 
                                                September 2016. Sampai Maret 2018 Madrasah Relawan sudah terlaksana di berbagai provinsi, diantaranya 
                                                dilaksanakan di Banda Aceh (Provinsi Aceh), Pekan Baru (Riau), Padang (Sumatera Barat) Lampung Utara 
                                                (Lampung), Pandeglang (Banten), Kuningan, Kab Garut, dan Kab Bandung Barat (Jawa Barat), Klaten 
                                                (Jawa Tengah), Blitar (Jawa Timur), Bali (Bali), dan Kupang (Nusa Tenggara Timur)
                                                </p>
                                                <p>Alhamdulillah, setelah terlaksananya Madrasah Relawan, terlahir para pemuda (relawan) yang siap 
                                                memberikan kontribusinya untuk negeri ini, berbagai aksi lokal dan nasional Madrasah Relawan dalam 
                                                menebar manfaat diantaranya pada saat terjadi bencana alam banjir bandang di Garut, banjir Bandung, 
                                                gempa Pidie Jaya, program ramadhan, qurban, sejuta mukena untuk muallaf, air buat sedulur, dan program 
                                                kemanusiaan lainnya para relawan turun langsung memberikan bantuan kepada masyarakat.  Besar harapan, 
                                                Madrasah Relawan menjadi sebuah wadah atau gerakan yang melahirkan pemuda yang siap menebar manfaat 
                                                untuk umat.
                                                </p>
                                                <p>
                                                <strong>Motto Madrasah Relawan</strong> : Muda Menebar Manfaat. <br>
                                                <strong>Visi</strong> : “Mencetak relawan yang amanah, sigap, dan melayani untuk Indonesia“<br>
                                                <strong>Misi :</strong><br>
                                                <ul>
                                                    <li>1. Merangkul pemuda musim untuk menebar manfaat</li>
                                                    <li>2. Menyebarkan Madrasah Relawan yang peduli keumatan di seluruh Indonesia</li>
                                                    <li>3. Memberikan ilmu kerelawanan dan sosial dakwah</li>
                                                    <li>4. Melaksanakan praktik dalam terjun sosial dakwah</li>
                                                    <li>5. Memiliki program sosial dakwah yang berkelanjutan</li> 
                                                    <li>6. Mengelola potensi kerelawanan dan kedermawanan untuk kesejahteraan ummat</li>
                                                </ul>
                                                </p>
                                                <p>
                                                Makna Logo :<br>
                                                    
                                                <img src="{{URL::asset('LogicFree/assets/images/logo-madrasah-relawan.png')}}"/><br>
                                                Dengan logo segi delapan dan menyerupai kupu-kupu.
                                                Segi delapan melambangkan komitmen dan kekokohan sebagai seorang pemuda muslim. 
                                                Kupu-kupu menggambarkan semangat belajar dan terus menebarkan manfaat, filosofinya diambil dari proses metamorfosis dari ulat, kepompong dan kemudian menjadi kupu-kupu yang siap terbang menebarkan manfaat menjadi inspirasi buat Madrasah Relawan

                                                </p>
                                            </div>
                                        </div>
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