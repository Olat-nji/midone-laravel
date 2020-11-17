<div>
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav" style="background-color:white">
            <a href="{{url('/')}}" class="logo">
                {{-- <img class="w-3" style="width:70%; margin-top:-7px" src="{{url('public/img/apple-touch-icon.png')}}" alt="Logo"> --}}
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('public/img/just-logo.png')}}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link @if(request()->routeIs('index')) active @endif">Home</a>

                            </li>


                            <li class="nav-item">
                                <a href="{{url('about')}}" class="nav-link @if(request()->routeIs('about')) active @endif">About</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{url('pricing')}}" class="nav-link">Pricing</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{url('/#services')}}" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('portfolio')}}" class="nav-link @if(request()->routeIs('portfolio')) active @endif">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('contact')}}" class="nav-link @if(request()->routeIs('contact')) active @endif">Contact</a>
                            </li>

                        </ul>
                        <div class="side-nav">
                            @if(Auth::check())
                            <a class="left-btn" data-turbolinks="false" href="{{url('login')}}">
                                <i class="bx bx-log-in"></i> Dashboard
                            </a>
                            @else
                            <a class="left-btn" href="{{url('login')}}">
                                <i class="bx bx-log-out"></i> Sign In
                            </a>

                            @endif
                            <a href="{{url('projects/create')}}" data-turbolinks="false" class="cmn-btn">
                                Get Started
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
