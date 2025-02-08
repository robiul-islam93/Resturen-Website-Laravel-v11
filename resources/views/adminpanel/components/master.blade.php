<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard @yield('title')</title>
    
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

     <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('adminpanel/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpanel/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('adminpanel/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('adminpanel/assets/css/lib/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/helper.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->

    <div id="main-wrapper">

@include('adminpanel.components.sidebar')

<!-- <div class="content-wrapper d-flex"> -->
    <!-- <div class="content-inner"> -->
        @include('adminpanel.components.header')

            @yield('content')

    <!-- </div> -->
<!-- </div> -->

@include('adminpanel.components.footer')

</div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
     <!-- Required vendors -->
     <script src="{{ asset('adminpanel/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('adminpanel/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('adminpanel/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('adminpanel/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('adminpanel/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('adminpanel/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('adminpanel/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('adminpanel/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('adminpanel/js/dashboard/dashboard-1.js') }}"></script>

    <!-- jquery vendor -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Select2 -->
    <script src="{{ asset('assets/js/lib/select2/select2.full.min.js') }}"></script>
    <!-- Form validation -->
    <script src="{{ asset('assets/js/lib/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/form-validation/jquery.validate-init.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>