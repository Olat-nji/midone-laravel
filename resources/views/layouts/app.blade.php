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

        <link rel="stylesheet" href="{{ asset('midone/dist/css/app.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
        
        @livewireStyles
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"  defer></script>
        <script src="{{ asset('js/alpine.js') }}"  defer></script>
        

        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body :class="{ 'bg-gray-900': dark }" class="app bg-white">
    <style>
        .modal {
      transition: opacity 0.25s ease;
    }
    </style>

        
            {{-- @livewire('navigation-dropdown') --}}

            <!-- Page Heading -->
              
@include('includes.mobile-menu')
            <!-- Page Content -->
            <main>
            <div class="flex">
           @include('includes.normal-menu')
            <div class="content">
                @livewire('includes.top-bar')
                {{ $slot }}
                </div>
            <!-- END: Content -->
        </div>
            
          

        @stack('modals')

        
    </body>
    
        <script src="{{ asset('midone/dist/js/app.js')}}"  ></script>
    
    @yield('scripts')
</html>




