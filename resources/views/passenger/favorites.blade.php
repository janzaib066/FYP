@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Favorites</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="section-cars" class="bg-gray-100">
            <div class="container">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-3 mb30">
                        @include("partials/sidebar")
                    </div>

                    <div class="col-lg-9">

                        @if($favorites->count() > 0)

                            @foreach($favorites as $fav)

                                @php

                                    $trip = App\Models\Trip::find($fav->trip_id);
                                    $car = App\Models\Cars::find($trip->car_id);

                                @endphp

                                <div class="de-item-list no-border mb30">

                                    <div class="d-img">
                                        <img src="{{ $car->picture }}" class="img-fluid" alt="">
                                    </div>

                                    <div class="d-info">

                                        <div class="d-text">

                                            <h4>{{ $car->name }}</h4>

                                            <div class="d-atr-group">

                                                <ul class="d-atr">
                                                    <li><span>Seats:</span>{{ $trip->seats }}</li>
                                                    <li><span>Luggage:</span>{{ $trip->bags_per_person }}</li>
                                                    <li><span>Engine:</span>{{ $car->engine_capacity }}</li>
                                                    <li><span>Departure:</span>{{ $trip->departure }}</li>
                                                    <li><span>Destination:</span>{{ $trip->destination }}</li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="d-price">
                                        <span>Rs.{{ $trip->fair_per_seat }}</span>
                                        <a class="btn-main" href="{{ route('tripsingle', ['id' => $trip->id]) }}">Book Now</a><br>
                                        <a href="{{ route('removetripfromfavorite', ['id' => $fav->id]) }}" class="btn btn-line bg-danger text-white mt-1" onclick="return confirm('Are you sure you want to remove this trip from favorite?');">Remove</a>
                                    </div>

                                    <div class="clearfix"></div>

                                </div>

                            @endforeach

                        @else

                        @endif

                    </div>
                </div>
            </div>
        </section>
        
@endsection