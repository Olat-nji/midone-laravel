<div>
    <footer id="footer">
        <div class="container">
            <div class="row py-5 my-4">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <h5 class="text-3 mb-3">ABOUT US</h5>
                    <p>Skylevel-Concepts (slc) is a Nigeria based IT company, where creative minds provide solutions and help to move businesses to the next level. We are built on a great level of integrity, principle and excellence out put.</p>
                    <p class="mb-0"><a href="{{ url('about-us') }}" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                    <h5 class="text-3 mb-3">Address</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-1">
                            <p class="text-3 text-color-light opacity-8 mb-1">36 Ipodo street, off Toyin St, 100001, Ikeja</p>
                        </li>
                        <li class="mb-3 pb-1">
                            <p class="text-3 text-color-light opacity-8 mb-1">11 Jide Alabi Street, Gloryland Estate, Isheri-Olofin</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-3 mb-3">social</h5>
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=2349077010153"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">WhatsApp</span></a>
                        <a href="https://web.facebook.com/skylevel_concepts-111937450221513"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">Facebook</span></a>
                        <a href="https://www.instagram.com/skylevel_concepts/"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">Instagram</span></a>
                        <a href="https://www.linkedin.com/in/fiyinfoluwa-ogunsola-b62085179/"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2">linkedin</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="{{ url('/') }}" class="logo pr-0 pr-lg-3">
                            <img alt="Porto Website Template" src="{{  asset('public/img/logo-footer.png')}}" class="opacity-5" height="33">
                        </a>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <p>© Copyright 2020. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <nav id="sub-menu">
                            <ul>
                                <li><i class="fas fa-angle-right"></i><a href="{{ url('page-faq') }}" class="ml-1 text-decoration-none">Training</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="{{ url('sitemap') }}" class="ml-1 text-decoration-none"> Mail</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="{{ url('contact-us') }}" class="ml-1 text-decoration-none">Call</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- WhatsHelp.io widget -->
        <script type="text/javascript">
            (function() {
                var options = {
                    whatsapp: "+234 09077010153", // WhatsApp number
                    call_to_action: "Message us", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol,
                    host = "getbutton.io",
                    url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /WhatsHelp.io widget -->


    </footer>
</div>
