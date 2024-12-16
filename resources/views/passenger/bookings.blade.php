@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">

            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">

                <div class="center-y relative text-center">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12 text-center">
                                <h1>Bookings</h1>
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

                        <div class="card p-4 rounded-5 mb25">
                            <h4>Scheduled Orders</h4>

                            <table class="table de-table">
                                <thead>
                                    <tr>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">#</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Car Name</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Location</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Drop Off Location</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Booking Date</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Fair</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Chat</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bookings->count() > 0)
                                        @foreach($bookings as $booking)
                                            @php
                                                $car = App\Models\Cars::find($booking->car_id);
                                                $trip = App\Models\Cars::find($booking->trip_id);
                                            @endphp
                                            <tr>
                                                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#{{ $booking->id }}</div></td>
                                                <td><span class="bold">{{ $car->name }}</span></td>
                                                <td>{{ $booking->departure }}</td>
                                                <td>{{ $booking->destination }}</td>
                                                <td>{{ $booking->booking_date }}</td>
                                                <td>{{ $booking->fair }}</td>
                                                <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                                                <td>
                                                    <a href="{{ route('messageseller', ['id'=> $booking->driver_id ]) }}" class="btn"><i class="fa-brands fa-rocketchat"></i></a>
                                                </td>
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

        </section>
        
@endsection