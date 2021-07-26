<div>

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="
                offset-xl-3
                col-xl-6
                offset-lg-2
                col-lg-8 col-md-12 col-sm-12
              ">
                        <h1>Welcome to <strong>deegeets </strong>media</h1>
                        <p class="font">
                            We help <strong>grow </strong>your instagram account
                        </p>
                        <a href="#features" class="main-button-slider">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{asset("public/main/front/assets/images/featured-item-01.png")}}" alt="" /></i>
                                </div>
                                <h5 class="features-title">Active and high quality</h5>
                                <p>
                                    We provide the highest quality for our users instagram
                                    account.
                                </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <!-- <i
                      ><img src="assets/images/featured-item-01.png" alt=""
                    /></i> -->
                                    <i class="fas  fa-phone-alt"></i>
                                </div>
                                <h5 class="features-title">Available customer support</h5>
                                <p>Contact us immediately if you have a question or issue.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h5 class="features-title">100% safety</h5>
                                <p>
                                    There is no risk utilizing our services, we guarantee it!
                                </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->
    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100" id="features">
        <div class="container">
            <div class="row">
                <div class="
              col-lg-6 col-md-12 col-sm-12
              align-self-center
              mobile-bottom-fix
            ">
                    <div class="left-heading">
                        <h2 class="section-title">About us</h2>
                    </div>
                    <div class="left-text">
                        <p>
                            Our aim is to help you grow your instagram account. No fake, no
                            bots just real people working actively on your account, at
                            affordable rates.
                        </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="
              col-lg-5 col-md-12 col-sm-12
              align-self-center
              mobile-bottom-fix-big
            " data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{asset("public/main/front/assets/images/right-image.png")}}" class="rounded img-fluid d-block mx-auto" alt="App" />
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Work Process</h1>
                            <p>We help provide the following services</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{asset("public/main/front/assets/images/work-process-item-01.png")}}" alt="" /></i>
                            <strong>Increasing Your Instagram Followers</strong>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{asset("public/main/front/assets/images/work-process-item-01.png")}}" alt="" /></i>
                            <strong>Increasing Your Instagram likes</strong>
                        </a>
                        <!-- col-6 -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{asset("public/main/front/assets/images/work-process-item-01.png")}}" alt="" /></i>
                            <strong>Increasing Your Instagram comments</strong>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{asset("public/main/front/assets/images/work-process-item-01.png")}}" alt="" /></i>
                            <strong>Increasing Your Instagram views</strong>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->


    <div id="pricing-plans">
        <!-- ***** Pricing Plans Start ***** -->
        @foreach ($prods as $key => $products)


        <section class="section colored">
            <div class="container">
                <!-- ***** Section Title Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Buy your instagram {{strtolower($key)}}</h2>
                        </div>
                    </div>

                </div>
                <!-- ***** Section Title End ***** -->

                <div class="row" wire:ignore.self>
                    @foreach ($products as $product)
                    <div class="@if(count($products)==1) col-md-12 @else col-lg-4 col-md-6 @endif col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s" wire:ignore.self>
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h3 class="pricing-title">{{$product->name}}</h3>
                            </div>

                            <div class="pricing-body">
                                @if($product->price!=null )
                                <div class="price-wrapper">
                                    <span class="currency">&#8358</span>
                                    @if($product->type=='Comments')
                                    <span class="price">{{$product->price}} per comment</span>
                                    @else
                                    @if(is_numeric($product->price) )
                                    <span class="price">{{number_format($product->price)}}</span>
                                    @else
                                    <span class="price">{{$product->price}}</span>
                                    @endif

                                    @endif

                                </div>
                                @endif
                                <ul class="list">
                                    @foreach ($product->features as $feature)
                                    <li class="active">{{$feature->value}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a wire:loading.class="d-none" wire:click="addtocart({{$product->id}})" style="cursor:pointer; color:white;" class="main-button" target="_blank">Purchase Now</a>
                                <a wire:loading style="cursor:pointer; color:white;" class="main-button" target="_blank">Please Wait...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        @endforeach
    </div>



    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>for any enquires or information?</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->

                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" wire:submit.prevent="contact">

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input wire:model="name" type="text" class="form-control" id="name" placeholder="Full Name" required="" />
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input wire:model="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="" />
                                    </fieldset>
                                </div>
                                <input type="hidden" name="_next" value="https://deegeets.co/thankyou.html" />
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea wire:model="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" wire:loading.remove wire:target="contact" id="form-submit" class="main-button">
                                            Send Message
                                        </button>
                                        <button type="submit" wire:loading wire:target="contact" class="main-button">
                                            Sending ...

                                        </button>
                                        <span x-data="{ shown: false, timeout: null }" x-init="@this.on('contact_saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class='text-sm text-gray-600 text-center'>
                                            {{ 'Message Sent.' }}
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    @push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

            @this.on('added', id => {

                Swal.fire({
                    title: 'Item added to cart'
                    , icon: 'success'
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#aaa'
                    , cancelButtonText: 'Close'
                    , confirmButtonText: 'Go To Cart'
                }).then((result) => {
                    //if user clicks on delete
                    console.log(result);
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('viewcart')
                        // success response

                    } else {

                    }
                });
            });


            @this.on('exists', () => {
                Swal.fire({
                    title: 'Sorry'
                    , text: 'You already have this in your cart!'
                    , icon: 'warning'
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#aaa'
                    , cancelButtonText: 'Close'
                    , confirmButtonText: 'Go To Cart'
                }).then((result) => {
                    //if user clicks on delete
                    console.log(result);
                    if (result.value) {
                        // calling destroy method to delete
                        @this.call('viewcart')
                        // success response

                    } else {

                    }
                });
            });


        })

    </script>
    @endpush
</div>
