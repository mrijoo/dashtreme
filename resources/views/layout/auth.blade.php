<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - @yield('title')</title>
    <!-- loader-->
    <link href="{{ URL::asset('assets/css/pace.min.css'); }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/js/pace.min.js'); }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico'); }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css'); }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ URL::asset('assets/css/animate.css'); }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ URL::asset('assets/css/icons.css'); }}" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="{{ URL::asset('assets/css/app-style.css'); }}" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

<!-- Start wrapper-->
@yield('main')

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--start color switcher-->
<div class="right-sidebar">
    <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
        </ul>

    </div>
</div>
<!--end color switcher-->

</div>
<!--wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('assets/js/jquery.min.js'); }}"></script>
<script src="{{ URL::asset('assets/js/popper.min.js'); }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js'); }}"></script>

<!-- sidebar-menu js -->
<script src="{{ URL::asset('assets/js/sidebar-menu.js'); }}"></script>

<!-- Custom scripts -->
<script src="{{ URL::asset('assets/js/app-script.js'); }}"></script>

</body>

</html>
