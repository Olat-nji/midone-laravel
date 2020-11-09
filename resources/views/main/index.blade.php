<div>

    <div class="banner-area">
        <div class="banner-shape d-sm-none  d-none d-lg-block">
            <img src="{{ asset('public/images/sass-banner-main.png')}}" alt="Banner">
            <img src="{{ asset('public/images/sass-banner-shape1.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape2.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape3.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape2.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape3.png')}}" alt="Banner">
        </div>

        <div class="banner-shape d-lg-none d-sm-block ">
            <img src="{{ asset('public/img/admin-banner.png')}}" alt="Banner">
            <img src="{{ asset('public/images/sass-banner-shape1.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape2.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape3.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape2.png')}}" alt="Banner"><img src="{{ asset('public/images/sass-banner-shape3.png')}}" alt="Banner">
        </div>

        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="banner-content">

                        <span> <img src="{{ asset('public/img/apple-touch-icon.png')}}" alt="logo"> SKYLEVEL-CONCEPTS</span>
                        <h1>WELCOME</h1>
                        <p>Everyone has a reason to work with technology.<br>We stand as a link between you and the tech world!</p>
                        <div class="banner-btn">
                            <a href="{{url('projects/create')}}" data-turbolinks="false" class="cmn-btn">
                                Get Started
                                <i class="bx bx-plus"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Service -->
    <section class="service-area pt-100 pb-70" id="services">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">OUR SERVICES</span>
                <h2>Here's What We Do</h2>
            </div>
            <div class="row">
                @foreach($services as $key=>$service)
                <div class="col-sm-6 col-lg-3">
                    <div class="service-item-two">
                        <img src="{{$service->image}}" alt="{{$service->name}}">
                        <h3>
                            <a href="{{url('services/'.$service->id)}}">{{$service->name}}</a>
                        </h3>
                        <p>{!!$service->description!!}</p>
                        <a class="service-link" href="{{url('services/'.$service->id)}}">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- End Service -->
    <!-- Design -->
    <section class="design-area  pb-70">
        <div class="container">
            <div class="row align-items-center pb-70">
                <div class="col-lg-6">
                    <div class="design-content">
                        <div class="section-title two">
                            <span class="sub-title">ABOUT US</span>
                            <h2>Let's help you reach your Goal</h2>
                            {!!$about->value!!}

                        </div>

                        <a href="{{url('about')}}" class="cmn-btn">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="design-img">
                        <img src="{{ asset('public/images/it-startup/design1.jpg')}}" alt="Design">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="inquiry-area">
        <div class="inquiry-shape">
            <img src="{{ asset('public/images/sass-inquiry1.png')}}" alt="Shape"><img src="{{ asset('public/images/sass-inquiry2.png')}}" alt="Shape"><img src="{{ asset('public/images/sass-inquiry3.png')}}" alt="Shape"><img src="{{ asset('public/images/sass-inquiry4.png')}}" alt="Shape"><img src="{{ asset('public/images/sass-inquiry5.png')}}" alt="Shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="inquiry-img">
                        <img src="{{ asset('public/images/sass-inquiry-main.png')}}" alt="Inquiry"></div>
                </div>
                <div class="col-lg-7">
                    <div class="inquiry-content">
                        <div class="section-title">
                            <span class="sub-title">Project Inquiry</span>
                            <h2>Have Any Questions Regarding Your Upcoming Project ?</h2>
                        </div>
                        <a href="{{url("contact")}}" class="cmn-btn">
                            Ask Us
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="about-area-two pb-70 pt-100">
        <div class="about-shape">
            <img src="{{ asset('public/images/digital-about2.png')}}" alt="Shape"><img src="{{ asset('public/images/digital-about3.png')}}" alt="Shape"><img src="{{ asset('public/images/digital-about4.png')}}" alt="Shape"></div>
        <div class="container-fluid p-0">
            <div class="row m-0 align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="about-img">
                        <img src="{{ asset('public/images/digital-about-main.png')}}" alt="About"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-content">
                        <div class="section-title three">
                            <span class="sub-title">Services</span>
                            <h2>Don't Worry ... You're in Good Hands</h2>
                            <p>Here are some the services we provide free of charge to you when you patronize us!</p>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-checkmark"></i> Live Chat
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i> Search Engine Submission
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i> Basic SEO
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i> Social Share
                            </li>
                            <li>
                                <i class="flaticon-checkmark"></i> Admin Dashboard
                            </li>
                        </ul><a href="{{url('projects/create')}}" data-turbolinks="false" class="cmn-btn">
                            Explore More
                            <i class="bx bx-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-area ptb-100">
        <div class="container">
            <div class="section-title three">
                <h2>Check Out Our Awesome Portfolio!</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="portfolio-slider owl-theme owl-carousel">
                @foreach($portfolios as $portfolio)
                <div class="portfolio-item">
                    <img src="{{$portfolio->image}}" alt="Portfolio">
                    <div class="portfolio-inner">
                        <span>{{$portfolio->name}}</span>
                        <h3>
                            <a href="{{$portfolio->link}}">{{$portfolio->description}}</a>
                        </h3>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="portfolio-contact">
                <p>We're Taking New Projects <a href="{{url('project/create')}}">Contact Us</a></p>
            </div>
        </div>
    </div>
    @if(count($testimonials)>0)
    <section class="testimonials-area ptb-100">
        <div class="testimonials-img">
            <img src="{{ asset('public/images/digital-testimonial1.jpg')}}" alt="Client"><img src="{{ asset('public/images/digital-testimonial2.jpg')}}" alt="Client"><img src="{{ asset('public/images/digital-testimonial3.jpg')}}" alt="Client"><img src="{{ asset('public/images/digital-testimonial4.jpg')}}" alt="Client"><img src="{{ asset('public/images/digital-testimonial5.jpg')}}" alt="Client"><img src="{{ asset('public/images/digital-testimonial6.jpg')}}" alt="Client"></div>
        <div class="container">
            <div class="section-title three">
                <span class="sub-title">Testimonials</span>
                <h2>Client Feedbacks</h2>
            </div>
            <div class="testimonials-slider owl-theme owl-carousel">
                @foreach($testimonials as $testimonial)
                <div class="testimonials-item">
                    <p>{{$testimonial->testimonial}}</p>
                    <h3>{{$testimonial->name}}</h3>
                    <span>{{$testimonial->job}}</span>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    <div class="partner-area">
        <div class="container-fluid p-0">
            <div class="partner-slider owl-theme owl-carousel">
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-1.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-2.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-3.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-1.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-5.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-3.png')}}" alt="Partner">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('public/img/logos/logo-2.png')}}" alt="Partner">
                </div>

            </div>
        </div>
    </div>
    <!-- End Partner -->

    <!-- FAQ -->
    @if(count($faqs)>0)
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <h2>What Do You Want To <span>Know?</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-content">
                        <ul class="accordion">
                            @foreach($faqs as $key => $value)
                            <li>
                                <a>
                                    {{$value->name}}
                                    <i class="flaticon-visibility"></i>
                                    <i class="flaticon-eye two"></i>
                                </a>
                                <p>{{$value->value}}</p>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('public/images/sass/faq-main.png')}}" alt="FAQ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- End Mind -->

</div>
