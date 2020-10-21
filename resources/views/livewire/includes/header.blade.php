<div>
    <header id="header" class="header-effect-shrink"  data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
            <div class="header-top header-top-default border-bottom-0 bg-color-primary">
                <div class="container">
                    <div class="header-row py-2">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills text-uppercase text-2">
                                        <li class="nav-item nav-item-anim-icon"> <a class="nav-link pl-0 text-light opacity-7" href="{{ url('/about-us') }}"><i class="fas fa-angle-right"></i>info@skylevelconcepts.com.ng</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
                                    <li class="social-icons-facebook"><a href="https://web.facebook.com/skylevel_concepts-111937450221513" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-instagram"><a href="https://www.instagram.com/skylevel_concepts/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/fiyinfoluwa-ogunsola-b62085179/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{ url('/') }}">
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{  asset('public/img/logo.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{ url('/') }}">Home</a></li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{ url('about-us') }}">About</a></li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{url('pricing')}}">Pricing</a></li>
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{ url('/contact') }}">Contact</a></li>
                                            @if(Auth::check())
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{ url('/dashboard') }}" data-turbolinks="false">Dashboard</a></li>
                                            @else
                                            <li class="dropdown"><a class="dropdown-item dropdown-togglec" href="{{ url('/register') }}" data-turbolinks="false">Register / Login</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
