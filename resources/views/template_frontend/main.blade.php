<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_frontend/css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('assets_frontend/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets_frontend/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('assets_frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('assets_frontend/css/colors.css') }}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('assets_frontend/css/version/tech.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">
    @include('template_frontend.header')
    <div id="app">
        <div class="main-wrapper main-wrapper-1 mt-3">
        @include('template_frontend.widgethead')
                @yield('content')
                @include('template_frontend.widgetfooter')
            </div>
        </div>
    @include('template_frontend.footer')
    <div class="dmtop">Scroll to Top</div>
</div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('assets_frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_frontend/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets_frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_frontend/js/custom.js') }}"></script>

</body>
</html>