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
    <title>Success</title>


    @livewireStyles
    @livewireScripts

    <script src="{{asset('public/js/alpine.js')}}"></script>
</head>

<body class="">



    <!-- Back to top -->


</body>
@include('sweetalert::alert')

<script src="{{asset("public/vendor/sweetalert/sweetalert.all.js")}}"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {

        Swal.fire({
            title: 'Success'
            , text: 'Your Payment has  been recieved. You will be redirected shortly.'
            , icon: 'success'
        });
        setTimeout(function(){window.location="{{url('profile')}}"}, 4000);

    })

</script>
</html>
