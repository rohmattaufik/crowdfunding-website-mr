<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Madrasah Relawan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="shortcut icon" href="{{URL::asset('image/icon.jpg')}}" />


    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/magnific-popup.css')}}">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/plugins.css')}}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/style.css')}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{URL::asset('LogicFree/assets/css/responsive.css')}}" />

    <script src="{{URL::asset('LogicFree/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    @yield('content')
    
    
    
    <!-- START SCROLL TO TOP  -->

    <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{URL::asset('LogicFree/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{URL::asset('LogicFree/assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/jquery.masonry.min.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/jquery.fancybox.pack.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{URL::asset('LogicFree/assets/js/gmaps.min.js')}}"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="{{URL::asset('LogicFree/assets/js/plugins.js')}}"></script>
        <script src="{{URL::asset('LogicFree/assets/js/main.js')}}"></script>


</body>

</html>