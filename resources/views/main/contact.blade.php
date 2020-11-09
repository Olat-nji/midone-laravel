<div>
    <div class="page-title-area">
        <div class="bg-text">
            <span>Sky<br>Level<br>Concepts<br></span>
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="sass.html">Home</a>
                            </li>
                            <li>
                                <span>Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>
                    Address: 36 Ipodo street, off Toyin St, 100001, Ikeja
                </p>
            </div>
            <form id="contactForm" wire:submit.prevent="save">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-user'></i>
                            </label>
                            <input type="text" wire:model="name" class="form-control" placeholder="Name*" required data-error="Please enter your name">
                            @error('name')<div class="help-block with-errors">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-mail-send'></i>
                            </label>
                            <input type="email" wire:model="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                            @error('email')<div class="help-block with-errors">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-phone-call'></i>
                            </label>
                            <input type="text" wire:model="phone" id="phone_number" placeholder="Phone"  class="form-control">
                            @error('phone')<div class="help-block with-errors">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class='bx bxs-edit'></i>
                            </label>
                            <input type="text" wire:model="subject" id="msg_subject" class="form-control" placeholder="Subject" >
                            @error('subject')<div class="help-block with-errors">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class='bx bx-comment-detail'></i>
                            </label>
                            <textarea wire:model="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" required data-error="Write your message"></textarea>
                            @error('message')<div class="help-block with-errors">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                    <div x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class='text-sm text-gray-600 text-center w-20 pt-5'>
                    </div>
                    
                        <button type="submit" wire:loading.remove class="btn cmn-btn">
                            Send Message 
                            <i class='bx bx-plus'></i>
                        </button>
                        <button type="submit" wire:loading wire:target="save" class="btn cmn-btn">
                            Sending
                            <i class='bx bx-plus'></i>
                        </button>
                        
                        <div id="msgSubmit" class="h3 text-center pt-3" x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" > Message Sent !</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Contact Info -->
        <div class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="info-item">
                    <h2>Contact With Phone Number or Email Address</h2>
                    <ul class="mail-call">
                        <li>
                            <a href="tel:+2348147725816">(+234) 8147725816</a>
                        </li>
                        <li>
                            <a href="mailto:info@skylevelconcepts.com.ng">info@skylevelconcepts.com.ng</a>
                        </li>
                    </ul>
                    <ul class="social-item">
                        <li>
                            <a href="https://web.facebook.com/skylevel_concepts-111937450221513" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=2349077010153" target="_blank">
                                <i class='bx bxl-whatsapp'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/skylevel_concepts/" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/in/fiyinfoluwa-ogunsola-b62085179/" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
