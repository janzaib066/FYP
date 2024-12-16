@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Cars</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="section-cars">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">

                            @if($trips->count() > 0)
                                @foreach($trips as $trip)
                                    <div class="col-md-4">
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

            </div>
            
        </section>
        
@endsection