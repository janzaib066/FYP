@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>
        
        <section aria-label="section">

            <div class="container">

                <div class="row g-custom-x">
                    
                    <div class="col-lg-8 mb-sm-30">

                        <h3>Do you have any question?</h3>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="{{ route('submitquery') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb10">
                                    <div class="field-set">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb10">
                                    <div class="field-set">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb10">
                                    <div class="field-set">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb10">
                                    <div class="field-set">
                                        <input type="text" name="phone_number" id="phone" class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="field-set mb20">
                                <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                            </div>
                            <div id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Send Message' class="btn-main">
                            </div>

                            <div id="success_message" class='success'>
                                Your message has been sent successfully. Refresh this page if you want to send more messages.
                            </div>
                            <div id="error_message" class='error'>
                                Sorry there was an error sending your form.
                            </div>

                        </form>

                    </div>
                    
                    <div class="col-lg-4">

                        <div class="de-box mb30">
                            <h4>Contact Us</h4>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Mirpur Azad Kashmir</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i><a href="tel:+92 347 9987166">+92 347 9987166</a></span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@tripshare.com">contact@tripshare.com</a></span>
                            </address>
                        </div>

                    </div>
                        
                </div>

            </div>

        </section>

@endsection