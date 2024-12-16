@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Dashboard</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="section-cars" class="bg-gray-100">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 mb30">
                        @include("partials/sidebar")
                    </div>

                    <div class="col-lg-9">

                        <div class="row">

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card p-4 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-car"></i>
                                    </div>
                                    <span class="h1 mb0">{{ $cars }}</span>
                                    <span class="text-gray">Total Cars</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card p-4 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-road fa-2x"></i>
                                    </div>
                                    <span class="h1 mb0">{{ $trips }}</span>
                                    <span class="text-gray">Total Trips</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            
        </section>
        
@endsection