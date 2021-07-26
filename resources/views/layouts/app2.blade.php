<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset("public/main/user/favicon.ico")}}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("public/main/user/favicon.ico")}}">

    <!-- Title -->
    <title></title>
    <link rel="stylesheet" href="{{asset("public/main/user/assets/fonts/fonts/font-awesome.min.css")}}">

    <!-- Font family-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="{{asset("public/main/user/assets/plugins/fullside-menu/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("public/main/user/assets/plugins/fullside-menu/waves.min.css")}}" rel="stylesheet">

    <!-- Dashboard Core -->
    <link href="{{asset("public/main/user/assets/css/dashboard.css")}}" rel="stylesheet">

    <!-- c3.js Charts Plugin -->
    <link href="{{asset("public/main/user/assets/plugins/charts-c3/c3-chart.css")}}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{asset("public/main/user/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css")}}" rel="stylesheet">

    <!---Font icons-->
    <link href="{{asset("public/main/user/assets/css/icons.css")}}" rel="stylesheet">


    @livewireStyles
    @livewireScripts
    
    <script src="{{asset('public/js/alpine.js')}}"></script>
</head>

<body class="">

    @stack('scripts')
    <div id="global-loader"></div>
    <div class="page">

        <div class="page-main">
            <div class="app-header1 header py-1 d-flex">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a class="header-brand" href="{{url('/')}}">
                            <img src="{{asset("public/main/user/assets\images\brand\logo.png")}}" class="header-brand-img" alt="adminor logo">
                        </a>



                    </div>
                </div>
            </div>



            {{$slot}}



        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2021 Deegeet.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>

    <!-- Back to top -->
    <a href="user/#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

    <!-- Dashboard js-->
    <script src="{{asset("public/main/user/assets/js/vendors/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/js/vendors/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/js/vendors/jquery.sparkline.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/js/vendors/selectize.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/js/vendors/jquery.tablesorter.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/js/vendors/circle-progress.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/plugins/rating/jquery.rating-stars.js")}}"></script>

    <!-- Fullside-menu Js-->
    <script src="{{asset("public/main/user/assets/plugins/fullside-menu/jquery.slimscroll.min.js")}}"></script>
    <script src="{{asset("public/main/user/assets/plugins/fullside-menu/waves.min.js")}}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{asset("public/main/user/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js")}}"></script>

    <!-- Custom Js-->
    <script src="{{asset("public/main/user/assets/js/custom.js")}}"></script>

</body>
@include('sweetalert::alert')
<script src="{{asset("public/vendor/sweetalert/sweetalert.all.js")}}"></script>
</html>
