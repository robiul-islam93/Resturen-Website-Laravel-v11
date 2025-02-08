<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{ asset('adminpanel/image/png') }}" sizes="16x16" href="./images/favicon.png">
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Custom CSS -->
    <link href="{{ asset('adminpanel/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/css/style.css') }}" rel="stylesheet">

</head>
<body class="h-100">


        <div class="authincation h-100">
            @yield('content')
        </div>

        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('adminpanel/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/quixnav-init.js') }}"></script>
    <!--endRemoveIf(production)-->
</body>

</html>