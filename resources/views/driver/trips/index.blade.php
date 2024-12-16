@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>My Trips</h1>
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
                                            <h4>My Trips</h4>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="{{ route('createtrip') }}" class="btn btn-dark">Add New</a>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if(Session::has('danger'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('danger') }}
                                        </div>
                                    @endif
                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <div class="table-responsive">
                                                
                                                <table class="table">
                                                    
                                                    <thead>
                                                        <th>#</th>
                                                        <th>Car</th>
                                                        <th>Departure</th>
                                                        <th>To</th>
                                                        <th>Seats</th>
                                                        <th>Fair Per Seat</th>
                                                        <th>Trip Date</th>
                                                        <th>Trip Time</th>
                                                        <th>Luggage Bags</th>
                                                        <th>Created At</th>
                                                    </thead>

                                                    <tbody>
                                                        @if($trips->count() > 0)
                                                            @foreach($trips as $index => $trip)
                                                                <tr>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td>
                                                                        <img src="{{ $trip->picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $trip->name }}</strong><br>
                                                                        <a href="{{ route('edittrip', ['id' => $trip->id]) }}">Edit</a> / <a href="{{ route('removetripe', ['id' => $trip->id]) }}" onclick="return confirm('Are you sure you want to remove this trip?');">Delete</a>
                                                                    </td>
                                                                    <td>{{ $trip->departure }}</td>
                                                                    <td>{{ $trip->destination }}</td>
                                                                    <td>{{ $trip->seats }}</td>
                                                                    <td>{{ $trip->fair_per_seat }}</td>
                                                                    <td>{{ $trip->departure_date }}</td>
                                                                    <td>{{ $trip->departure_time }}</td>
                                                                    <td>{{ $trip->bags_per_person }}</td>
                                                                    <td>{{ $trip->created_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @else

                                                        @endif
                                                    </tbody>

                                                </table>

                                            </div>

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