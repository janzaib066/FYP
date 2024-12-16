@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/2.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>{{ $trip->departure }} - {{ $trip->destination }}</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="section-car-details">
            <div class="container">
                @if(Session::has('danger'))
                    <div class="alert alert-danger">
                        {{ Session::get('danger') }}
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div id="slider-carousel" class="owl-carousel">
                            <div class="item">
                                <img src="{{ $car->picture }}" alt="">
                            </div>
                            @if($gallery->count() > 0)
                                @foreach($gallery as $gal)
                                    <div class="item">
                                        <img src="{{ $gal->image }}" alt="">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h3>
                            {{ $car->name }} 

                            @if (Session::has('user_id') == false)
                                <a href="{{ route('login') }}" class="float-end"><i class="fa fa-heart"></i></a>
                            @else

                                @if(Session::get('role') == 'Driver')
                                    <a href="#" class="float-end"><i class="fa fa-heart"></i></a>
                                @elseif(Session::get('role') == 'Passenger')
                                    <a href="{{ route('addtofavorite', ['trip_id' => $trip->id, 'driver_id' => $trip->user_id]) }}" class="float-end"><i class="fa fa-heart"></i></a>
                                @endif

                            @endif
                            
                        </h3>

                        <div class="spacer-10"></div>

                        <div class="de-spec">
                            <div class="d-row">
                                <span class="d-title">Departure From</span>
                                <spam class="d-value">{{ $trip->departure }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Destination At</span>
                                <spam class="d-value">{{ $trip->destination }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Make</span>
                                <spam class="d-value">{{ $car->make }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Model</span>
                                <spam class="d-value">{{ $car->model }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Color</span>
                                <spam class="d-value">{{ $car->color }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Body</span>
                                <spam class="d-value">{{ $car->body_type }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Seat</span>
                                <spam class="d-value">{{ $trip->seats }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Luggage</span>
                                <spam class="d-value">{{ $trip->bags_per_person }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Engine</span>
                                <spam class="d-value">{{ $car->engine_capacity }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Type</span>
                                <spam class="d-value">{{ $car->vehicle_type }}</spam>
                            </div>
                            <div class="d-row">
                                <span class="d-title">Car Number</span>
                                <spam class="d-value">{{ $car->car_number }}</spam>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3">

                        <div class="de-price text-center">
                            Price Per Person
                            <h3>Rs.{{ $trip->fair_per_seat }}</h3>
                        </div>

                        <div class="spacer-30"></div>

                        <div class="de-box mb25">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ $driver->profile_picture }}" class="img-thumbnail" style="border-radius: 50%;height: 57px;width: 57px;">
                                </div>
                                <div class="col-8">
                                    <h4 class="pt-2">{{ $driver->name }}</h4>

                                    @if (Session::has('user_id') == false)
                                        <a href="{{ route('login') }}" class="btn btn-id text-white">Contact Me</a>
                                    @else

                                        @if(Session::get('role') == 'Driver')
                                            <a href="{{ route('login') }}" class="btn btn-id text-white">Only Passenger can Message</a>
                                        @elseif(Session::get('role') == 'Passenger')
                                            <a href="{{ route('messageseller', ['id'=> $trip->user_id ]) }}" class="btn btn-id text-white">Contact Me</a>
                                        @endif

                                    @endif

                                    
                                </div>
                            </div>
                        </div>

                        <div class="spacer-30"></div>

                        <div class="de-box mb25">

                            <form action="{{ route('makebooking') }}" id='contact_form' method="post">
                                @csrf
                                <h4>Booking this car</h4>

                                <div class="spacer-20"></div>

                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Location</h5>
                                        <input type="text" name="PickupLocation" value="{{ $trip->departure }}" class="form-control" readonly>

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Drop Off Location</h5>
                                        <input type="text" name="DropoffLocation" value="{{ $trip->destination }}" class="form-control" readonly>

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Date</h5>
                                        <div class="date-time-field">
                                            <input type="date" name="Pick Up Date" value="{{ $trip->departure_date }}" class="form-control" readonly>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb20">
                                        <h5>Pick Up Time</h5>
                                        <div class="date-time-field">
                                            <input type="time" name="Pick Up Time" value="{{ $trip->departure_time }}" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                @if (Session::has('user_id') == false)
                                    <a href="{{ route('login') }}" class="btn-main btn-fullwidth">Login</a>
                                @else

                                    @if(Session::get('role') == 'Driver')
                                        <div class="alert alert-info">
                                            You need to be a passenger to Book This Trip
                                        </div>
                                    @elseif(Session::get('role') == 'Passenger')

                                        <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                                        <input type="hidden" name="car_id" value="{{ $trip->car_id }}">
                                        <input type="hidden" name="driver_id" value="{{ $trip->user_id }}">
                                        <input type="hidden" name="passenger_id" value="{{ session('user_id') }}">
                                        <input type="hidden" name="departure" value="{{ $trip->departure }}">
                                        <input type="hidden" name="destination" value="{{ $trip->destination }}">
                                        <input type="hidden" name="fair" value="{{ $trip->fair_per_seat }}">
                                        <input type="hidden" name="departure_date" value="{{ $trip->departure_date }}">
                                        <input type="hidden" name="departure_time" value="{{ $trip->departure_time }}">
                                        <input type="hidden" name="bags_per_person" value="{{ $trip->bags_per_person }}">
                                        <input type="hidden" name="booking_date" value="{{ date('y-m-d') }}">

                                        <input type='submit' id='send_message' value='Book Now' class="btn-main btn-fullwidth">
                                    @endif

                                @endif

                                <div class="clearfix"></div>
                                
                            </form>

                        </div>

                    </div> 

                </div>

            </div>

        </section>
        
@endsection