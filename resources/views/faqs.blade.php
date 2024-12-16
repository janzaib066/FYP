@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Frequently Asked Questions</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>
        
        <section aria-label="section">

            <div class="container">
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

@endsection