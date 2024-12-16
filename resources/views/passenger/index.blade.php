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
                                        <i class="fa id-color fa-2x fa-calendar-check-o"></i>
                                    </div>
                                    <span class="h1 mb0">03</span>
                                    <span class="text-gray">Upcoming Orders</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card p-4 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-tags"></i>
                                    </div>
                                    <span class="h1 mb0">12</span>
                                    <span class="text-gray">Coupons</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card p-4 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-calendar"></i>
                                    </div>
                                    <span class="h1 mb0">58</span>
                                    <span class="text-gray">Total Orders</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mb25 order-sm-1">
                                <div class="card p-4 rounded-5">
                                    <div class="symbol mb40">
                                        <i class="fa id-color fa-2x fa-calendar-times-o"></i>
                                    </div>
                                    <span class="h1 mb0">24</span>
                                    <span class="text-gray">Cancel Orders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection