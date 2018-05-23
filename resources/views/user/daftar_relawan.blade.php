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
                                                <li><a href="#home">DAFTAR RELAWAN</a></li>
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
            <section id="choose" class="choose">
                    <div class="container">
                        <div class="row">
                            <div class="main_choose sections">
                                <div class="col-sm-12">
                                    <div class="head_title">
                                        <h3>MASA PENDAFTARAN RELAWAN</h3>
                                        <div class="separator"></div>
                                    </div>
                                    <div class="single_choose">
                                        <div class="single_choose_acording">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                @foreach($recrutments as $term)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="{{$term->id}}">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$term->id}}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                                <i class="fa fa-picture-o"></i> {{$term->title}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$term->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="{{$term->id}}" aria-expanded="false" style="height: auto;">
                                                        <div class="panel-body">
                                                            <h6><strong class="clr-orange">Terbuka Hingga : {{$term->date_finish}}</strong></h6><hr>
                                                            <p>
                                                            {!! html_entity_decode($term->description) !!}</p><hr>
                                                            <h3>Isikan Form Berikut :</h3><br>
                                                            <div class="single_contant_left">
                                                                    <form action="#" id="formid">
                                                                        <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
                                                                        {{ csrf_field() }}
                                                                        
                                                                        @foreach($term->questions as $question)
                                                                            @if($question->answer_type == 1)
                                                                            <div class="form-group">
                                                                                <label>{!! html_entity_decode($question->question) !!}</label>
                                                                                <input type="text" class="form-control" name="{{$question->id}}">
                                                                            </div>
                                                                            @elseif($question->answer_type == 2)
                                                                            <div class="form-group">
                                                                                <label>{!! html_entity_decode($question->question) !!}</label>
                                                                                <textarea class="form-control" name="{{$question->id}}" rows="8"></textarea>
                                                                            </div>
                                                                            @elseif($question->answer_type == 3)
                                                                            <div class="form-group">
                                                                                <label>{!! html_entity_decode($question->question) !!}</label>
                                                                                <select class="form-control" name="{{$question->id}}">
                                                                                    @foreach($question->options as $option)
                                                                                    <option value="{{$option->id}}">{{$option->option_text}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
    
                                                                            @endif
                                                                        @endforeach
                                                                        
                        
                                                                        <div class="">
                                                                            <input type="submit" value="Submit" class="btn btn-primary">
                                                                        </div>
                                                                        <!--</div>--> 
                                                                    </form>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach


                                                

                            </div>
                        </div>
                    </div>
                </section>

            

                @include('user.layout.footer')



        </div>

    @endsection
