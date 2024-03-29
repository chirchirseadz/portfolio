<!doctype html>
<html lang="en">

<head>
    <title>Seadz Tech </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Maha Personal cv/resume template for professional and personal website." />
    <meta name="keywords"
        content="creative, cv, designer,  online cv, online resume, powerful portfolio, professional, professional resume, responsive, resume, vcard " />
    <meta name="developer" content="Md. Siful Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
   

    <!-- Google Font-->
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/bootstrap.min.css') }}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/animate.css') }}">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/owl.css') }}">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/jquery.fancybox.min.css') }}">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Colors -->
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/blue.css') }}" title="blue">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/defauld.css') }}" title="defauld">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/green.css') }}" title="green">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/blue-munsell.css') }}" title="blue-munsell">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/orange.css') }}" title="orange">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/purple.css') }}" title="purple">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/slate.css') }}" title="slate">
    <link rel="alternate stylesheet" href="{{ asset('assets/css/colors/yellow.css') }}" title="yellow">

</head>

<body class="white-vertion black-bg">

    <!-- Start Loader -->
    <div class="section-loader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loader -->

    @yield('content')


    <!--
     ==============
    * JS Files *
    ==============
    -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/js/jquery.min.js') }} "></script>
    <!-- popper -->
    <script src="{{ asset('assets/plugins/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/plugins/js/owl.carousel.js') }}"></script>
    <!-- validator -->
    <script src="{{ asset('assets/plugins/js/validator.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('assets/plugins/js/wow.min.js') }}"></script>
    <!-- mixin js-->
    <script src="{{ asset('assets/plugins/js/jquery.mixitup.min.js') }}"></script>
    <!-- circle progress-->
    <script src="{{ asset('assets/plugins/js/circle-progress.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ asset('assets/plugins/js/jquery.nav.js') }}"></script>
    <!-- Fancybox js-->
    <script src="{{ asset('assets/plugins/js/jquery.fancybox.min.js') }}"></script>
    <!-- Map api -->
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>
    <!-- isotope js-->
    <script src="{{ asset('assets/plugins/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/packery-mode.pkgd.js') }}"></script>
    <!-- Custom Scripts-->
    <script src="{{ asset('assets/js/map-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>




</body>

</html>
