<div>

    <!-- Page Title -->
    <div class="page-title-area">
        <div class="bg-text">
            <span>Sky<br>Level<br>Concepts<br></span>
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Design -->
    <section class="design-area two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="design-content">
                        <div class="section-title two">
                            <span class="sub-title">OUR COMPANY</span>
                            <h2>Your Link With The Tech!</h2>
                        </div>
                        <p>{!!$about!!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="design-img">
                        <img src="{{url('public/images/it-startup/design1.jpg')}}" alt="Design">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @if(count($testimonials)>0)
    <section class="testimonials-area ptb-100">
        <div class="testimonials-img">
            <img src="public/images/digital-testimonial1.jpg" alt="Client"><img src="public/images/digital-testimonial2.jpg" alt="Client"><img src="public/images/digital-testimonial3.jpg" alt="Client"><img src="public/images/digital-testimonial4.jpg" alt="Client"><img src="public/images/digital-testimonial5.jpg" alt="Client"><img src="public/images/digital-testimonial6.jpg" alt="Client"></div>
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


</div>
