<div>
 <div class="mind-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mind-left">
                        <h2>Have A Project In Mind? Let's Work Together</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mind-right">
                        <a href="{{url('projects/create')}}" class="cmn-btn">
                            Get Started
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('public/img/apple-touch-icon.png')}}" alt="Logo"></a>
                            <p>{!! Illuminate\Support\Str::words(strip_tags(\App\Models\About::where('name','About (Home Page)')->get()->first()->value), 20, '...') !!}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Support</h3>
                            <ul>
                                <li>
                                    <a href="{{url('faq')}}" target="_blank">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{url('privacy')}}" target="_blank">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Terms &amp; Condiitons</a>
                                </li>
                                <li>
                                    <a href="{{url('chat')}}" target="_blank">Community</a>
                                </li>
                                <li>
                                    <a href="{{url('contact')}}" target="_blank">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Company</h3>
                            <ul>
                                <li>
                                    <a href="{{url('about')}}" target="_blank">About Us</a>
                                </li>
                                <li>
                                    <a href="{{url('services')}}" target="_blank">Services</a>
                                </li>
                                
                                <li>
                                    <a href="{{url('blog')}}" target="_blank">Latest News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-address">
                            <h3>Address</h3>
                            <ul>
                                <li>
                                    <span>Address:</span> 36 Ipodo street, off Toyin St, 100001, Ikeja <br>
                                    &
                                    11 Jide Alabi Street, Gloryland Estate, Isheri-Olofin
                                </li>
                                <li>
                                    <span>Message:</span>
                                    <a href="mailto:info@skylevelconcepts.com.ng">info@skylevelconcepts.com.ng</a>
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <a href="tel:09077010153">09077010153</a>
                                </li>
                                <li>
                                    <span>Open:</span> Mon - Fri/9:00 AM - 6:00 PM
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>Copyright @2020 Design &amp; Developed by <a href="#" target="_blank">SkyLevel Concepts</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <ul>
                            <li>
                                <a href="https://web.facebook.com/skylevel_concepts-111937450221513" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=2349077010153" target="_blank">
                                    <i class="bx bxl-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/skylevel_concepts/" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href="https://www.linkedin.com/in/fiyinfoluwa-ogunsola-b62085179/" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- Go Top -->
    <div class="go-top">
        <i class="bx bx-up-arrow"></i>
        <i class="bx bx-up-arrow"></i>
    </div>
</div>
