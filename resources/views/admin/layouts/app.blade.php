<!DOCTYPE html>
<html lang="en" x-data="data()" :class="{ 'dark bg-gray-900': dark }" class=" bg-white">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{asset('public/img/apple-touch-icon.png')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <link rel="stylesheet" href="{{asset('public/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/editor.css')}}"> --}}

    <link rel="stylesheet" href="{{ asset('public/midone/dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">

    @livewireStyles
    @livewireScripts
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/alpine.js') }}" defer></script>


    @yield('scripts')
    @stack('scripts')
    
</head>

@include('sweetalert::alert')
@if(env('APP_ENV')=='local')<script src="{{asset('public/vendor/sweetalert/sweetalert.all.js')}}"></script>@endif
<body :class="{ 'bg-gray-900': dark }" class="app bg-white">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

    </style>


    {{-- @livewire('navigation-dropdown') --}}

    <!-- Page Heading -->

    @include('admin.includes.mobile-menu')
    <!-- Page Content -->
    <main>
        <div class="flex">
            @include('admin.includes.normal-menu')
            <div class="content">
                @livewire('admin.includes.top-bar')
                {{ $slot }}
            </div>
            <!-- END: Content -->
        </div>



        @yield('modals')
        <script src="{{ asset('public/midone/dist/js/app.js')}}"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
        <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('public/js/jquery.hideseek.min.js') }}" defer></script>
        <script>
            $(document).ready(function() {
                $('#search-highlight').hideseek({
                    highlight: true
                    , nodata: 'No results found'
                    , headers: '.search-result__content__title'
                });
            });

        </script>
        {{--
    <script src="{{asset('public/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script> --}}

        {{-- <script>
    $('.editor').summernote();
    </script> --}}
</body>


</html>
