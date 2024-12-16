@extends('layouts.app')

    @section('content')
    
    <section id="section-hero" aria-label="section" class="jarallax">

        <img src="images/background/1.jpg" class="jarallax-img" alt="">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-12 text-light">

                    <div class="spacer-double"></div>
                    <div class="spacer-double"></div>
                    <h1 class="mb-2 text-center">Looking for a <span class="id-color">vehicle</span>? You're at the right place.</h1>
                    <div class="spacer-single"></div>
                    <div class="spacer-single"></div>

                </div>

            </div>

        </div>

    </section>

    <section id="section-cars">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Vehicle Fleet</h2>
                    <p>Book your trip from our registered users.</p>
                    <div class="spacer-20"></div>
                </div>
                <div id="items-carousel" class="owl-carousel wow fadeIn">
                    @if($trips->count() > 0)
                        @foreach($trips as $trip)
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="{{ $trip->picture }}" class="img-fluid" alt="" style="width: 387px;height: 241px;">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>{{ $trip->make }} {{ $trip->name }} {{ $trip->model }}</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i>
                                                <span>
                                                    @php
                                                        $totalFavorites = App\Models\Favorite::where('trip_id', $trip->id)->count();
                                                    @endphp
                                                    {{ $totalFavorites }}
                                                </span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">{{ $trip->seats }}</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">{{ $trip->bags_per_person }}</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">{{ $trip->body_type }}</span>
                                                <br>
                                                <span class="d-atr" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> {{ $trip->departure }} to {{ $trip->destination }}</span>
                                            </div>
                                            <div class="d-price">
                                                Fair per seat <span>Rs.{{ $trip->fair_per_seat }}</span>
                                                <a class="btn-main" href="{{ route('tripsingle', ['id' => $trip->id]) }}">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="text-light jarallax" aria-label="section">
        <img src="images/background/3.jpg" alt="" class="jarallax-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1>Let's Your Adventure Begin</h1>
                    <div class="spacer-20"></div>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-trophy de-icon mb20"></i>
                    <h4>First Class Services</h4>
                    <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim ut ea.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-road de-icon mb20"></i>
                    <h4>24/7 road assistance</h4>
                    <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim ut ea.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-pin de-icon mb20"></i>
                    <h4>Free Pick-Up & Drop-Off</h4>
                    <p>Aliquip consequat excepteur non dolor irure ad irure labore ex eiusmod est duis culpa ex ut minim ut ea.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="section-faq">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Have Any Questions?</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row g-custom-x">

                <div class="col-md-12 wow fadeInUp">

                    <div class="accordion secondary">

                        <div class="accordion-section">

                            @if($faqs->count() > 0)

                                @foreach($faqs as $faq)

                                    <div class="accordion-section-title" data-tab="#accordion-{{ $faq->id }}">
                                        {{ $faq->title }}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-{{ $faq->id }}">
                                        <p>
                                            {{ $faq->description }}
                                        </p>
                                    </div>

                                @endforeach

                            @else
                                No Data Found!
                            @endif

                        </div>

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