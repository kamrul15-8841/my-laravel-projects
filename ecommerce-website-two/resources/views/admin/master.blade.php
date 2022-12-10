<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('/')}}admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('admin.includes.left-sidebar')

<!-- Start Welcome area -->
<div class="all-content-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('/')}}admin/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.header')

    @yield('body')

</div>
<!-- jquery
    ============================================ -->
<script src="{{asset('/')}}admin/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('/')}}admin/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/metisMenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('/')}}admin/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/calendar/moment.min.js"></script>
<script src="{{asset('/')}}admin/js/calendar/fullcalendar.min.js"></script>
<script src="{{asset('/')}}admin/js/calendar/fullcalendar-active.js"></script>
<!-- float JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/flot/jquery.flot.js"></script>
<script src="{{asset('/')}}admin/js/flot/jquery.flot.resize.js"></script>
<script src="{{asset('/')}}admin/js/flot/curvedLines.js"></script>
<script src="{{asset('/')}}admin/js/flot/flot-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('/')}}admin/js/main.js"></script>
</body>

</html>
