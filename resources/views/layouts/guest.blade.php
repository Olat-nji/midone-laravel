<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('public/css/app2.css') }}" data-turbolinks-reload>
        {{-- <link rel="stylesheet" href="{{ asset('public/css/fontawesome-free/css/all.min.css') }}" data-turbolinks-reload> --}}

        <!-- Scripts -->
        @livewireStyles
        @livewireScripts
        <script src="{{ asset('public/js/app.js') }}"></script>
        
        
    </head>
    <body class="text-gray-800 antialiased">
        <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                    <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a
              ><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button"
                onclick="toggleNavbar('example-collapse-navbar')"
              >
                <i class="text-white fas fa-bars"></i>
              </button>
            </div>
            <div
              class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
              id="example-collapse-navbar"
            >
              <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">
                  <a
                    class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                    href="{{ url('about') }}"
                    ><i
                      class="lg:text-gray-300 text-gray-500 fas fa-file-alt text-lg leading-lg mr-2"
                    ></i>
                    What do we do</a
                  >
                </li>
              </ul>
              <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                <li class="flex items-center">
                  <a
                    class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                    href="https://web.facebook.com/skylevel_concepts-111937450221513"
                    ><i
                      class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
                    ></i
                    ><span class="lg:hidden inline-block ml-2">Share</span></a
                  >
                </li>
                <li class="flex items-center">
                  <a
                    class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                     href="https://www.instagram.com/skylevel_concepts/"
                    ><i
                      class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "
                    ></i
                    ><span class="lg:hidden inline-block ml-2">Tweet</span></a
                  >
                </li>
                <li class="flex items-center">
                  <a
                    class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                    href="https://www.linkedin.com/in/fiyinfoluwa-ogunsola-b62085179/"
                    ><i
                      class="lg:text-gray-300 text-gray-500 fab fa-linkedin text-lg leading-lg "
                    ></i
                    ><span class="lg:hidden inline-block ml-2">Recommend</span></a
                  >
                </li>
               
              </ul>
            </div>
          </div>
        </nav>




        <main>
        <section class="absolute w-full h-full">
        
            <div
                class="fixed top-0 w-full h-full bg-gray-900"
                style="height:100%; background-image: url({{ asset('public/bg.png') }}); background-size: 100%; background-repeat: repeat;"
              ></div>
              
              <div class="container mx-auto px-4 mt-5 h-full">
                <div class="flex content-center items-center justify-center h-full">
                  <div class="w-full lg:w-4/12 px-4 ">
            {{ $slot }}
                    </div>
                </div>
            </div>
            
        </section>
        <template x-if="dark">
        <div class="cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-300 dark:text-gray-300">Light Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        </template>
        </main>
        <script>
            function toggleNavbar(collapseID) {
              document.getElementById(collapseID).classList.toggle("hidden");
              document.getElementById(collapseID).classList.toggle("block");
            }
          </script>
    </body>
</html>
