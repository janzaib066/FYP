@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Create Trips</h1>
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

                        <div class="card p-4  rounded-5">

                            <div class="row mb-3">

                                <div class="col-md-12">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <h4>Create Trip</h4>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="{{ route('mytrips') }}" class="btn btn-dark">Back to Trips</a>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <form action="{{ route('savetrip') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="">Select Your Car</label>
                                                    <select name="car_id" class="form-control" required>
                                                        <option value="">Select</option>
                                                        @foreach($cars as $car)
                                                            <option value="{{ $car->id }}">{{ $car->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Departure Location</label>
                                                    <input type="text" name="departure" placeholder="Enter Your Departure Location Name" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Destination Location</label>
                                                    <input type="text" name="destination" placeholder="Enter Your Destination Location" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">No. of Seats Available</label>
                                                    <input type="number" name="seats" placeholder="Enter Number of Seats Available" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Fair Per Seat</label>
                                                    <input type="number" name="fair_per_seat" placeholder="Enter Fair Per Seat" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Departure Date</label>
                                                    <input type="date" name="departure_date" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Departure Time</label>
                                                    <input type="time" name="departure_time" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Luggage Bags Per Person</label>
                                                    <input type="number" name="bags_per_person" placeholder="Enter Number of bags per person" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-dark">Save</button>
                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        
@endsection