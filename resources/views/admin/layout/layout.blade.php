<!DOCTYPE html>
<html>
<head>
<!-- HEAD -->
    @include('admin.layout.head')
    <!-- CSS -->
    @yield('style')
<!-- BODY -->
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">   

        <!-- HEADER -->
            @include('admin.layout.header')

        <!-- SIDEBAR -->
            @include('admin.layout.sidebar')
        <!-- CONTENT -->
            <div class="content-wrapper">
                @yield('content')
            </div>
        <!-- FOOTER -->
            @include('admin.layout.footer')
    </div>
    <!-- SCRIPT -->
        @include('admin.layout.script')
        @yield('script')
    
</body>
</html>