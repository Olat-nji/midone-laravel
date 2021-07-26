<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.deegeets.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 10:22:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{("public/main/front/assets/files/all.min.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Deegeets || we help grow your instagram page</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{("public/main/front/assets/css/bootstrap.min.css")}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{("public/main/front/favicon1.ico")}}">
    <link rel="stylesheet" type="text/css" href="{{("public/main/front/assets/css/font-awesome.css")}}" />
    <link rel="stylesheet" href="{{("public/main/front/assets/css/templatemo-softy-pinko.css")}}" />



    @livewireStyles
    @livewireScripts

</head>

@stack('scripts')

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @include('main.includes.header')

    {{$slot}}

    @include('main.includes.footer')

    <!-- jQuery -->
    <script src="{{("public/main/front/assets/js/jquery-2.1.0.min.js")}}"></script>

    <!-- Bootstrap -->
    <script src="{{("public/main/front/assets/js/popper.js")}}"></script>
    <script src="{{("public/main/front/assets/js/bootstrap.min.js")}}"></script>

    <!-- Plugins -->
    <script src="{{("public/main/front/assets/js/scrollreveal.min.js")}}"></script>
    <script src="{{("public/main/front/assets/js/waypoints.min.js")}}"></script>
    <script src="{{("public/main/front/assets/js/jquery.counterup.min.js")}}"></script>
    <script src="{{("public/main/front/assets/js/imgfix.min.js")}}"></script>

    <!-- Global Init -->
    <script src="{{("public/main/front/assets/js/custom.js")}}"></script>
</body>

<!-- Mirrored from www.deegeets.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 10:22:27 GMT -->
@include('sweetalert::alert')
<script src="{{asset("public/vendor/sweetalert/sweetalert.all.js")}}"></script>
</html>
