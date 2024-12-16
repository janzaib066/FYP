@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>About Us</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInRight" data-wow-delay=".25s">
                        <p>
                            Welcome to our innovative trip-sharing platform, where drivers and passengers come together to create seamless travel experiences. At our company, drivers have the opportunity to post their upcoming trips, specifying the departure and destination points, as well as the available seats in their vehicles. This enables passengers to easily browse through the various trip options and book the ones that suit their needs. Whether you're commuting to work, planning a weekend getaway, or embarking on a long-distance journey, our platform connects you with reliable drivers and fellow passengers, fostering a sense of community while ensuring convenient and efficient travel arrangements.
                        </p>
                        <p>
                            With our user-friendly interface and advanced search filters, passengers can effortlessly find trips that align with their preferences, such as departure time, cost, and route. Safety and security are paramount to us, which is why we implement a thorough verification process for both drivers and passengers, including driver's license checks and user ratings and reviews. By promoting transparency and accountability, we strive to create a trustworthy environment for all our users. Join our trip-sharing community today and experience the joy of hassle-free travel, where drivers and passengers forge meaningful connections while reducing congestion and minimizing their carbon footprint. Together, we're redefining the way people travel, one trip at a time.
                        </p>
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                            Hours of Work
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                            Clients Supported
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                            Awards Winning
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="de_count wow fadeInUp" data-bgcolor="#f5f5f5">
                            <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                            Years Experience
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="s2">Call us for further information. Customer care is here to help you anytime.</h2>
                </div>
                <div class="col-lg-5 text-lg-center text-sm-center">
                    <div class="phone-num-big">
                        <i class="fa fa-phone"></i>
                        <span class="pnb-text">
                            Call Us Now
                        </span>
                        <span class="pnb-num">
                            <a href="tel:+92 347 9987166" class="text-white">+92 347 9987166</a>
                        </span>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-main">Contact Us</a>
                </div>
            </div>
        </div>
        </section>
        
@endsection