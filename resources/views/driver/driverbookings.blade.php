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

                        <div class="card p-4 rounded-5 mb25">
                            <h4>Scheduled Orders</h4>

                            <table class="table de-table">
                                <thead>
                                    <tr>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">#</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Passenger Name</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Car Name</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Booking Date</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Change Status</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Chat</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bookings->count() > 0)
                                        @foreach($bookings as $booking)
                                            @php
                                                $car = App\Models\Cars::find($booking->car_id);
                                                $trip = App\Models\Cars::find($booking->trip_id);
                                                $passenger = App\Models\User::find($booking->passenger_id);
                                            @endphp
                                            <tr>
                                                <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#{{ $booking->id }}</div></td>
                                                <td>
                                                  <strong>{{ $passenger->name }}</strong><br>
                                                    <a href="tel:{{ $passenger->phone_number }}">{{ $passenger->phone_number }}</a><br>
                                                    <strong>Departure: </strong>{{ $booking->departure }}<br>
                                                    <strong>Destination: </strong>{{ $booking->destination }}<br>
                                                    <strong>Fair: </strong>Rs.{{ $booking->fair }}
                                                  </b>
                                                </td>
                                                <td><span class="bold">{{ $car->name }}</span></td>
                                                <td>{{ $booking->booking_date }}</td>
                                                <td>
                                                  <select onchange="location = this.value;">
                                                    <option value="">Select</option>
                                                    <option value="{{ route('changetripstatus', ['booking_id' => $booking->id, 'status' => 'In Processing']) }}">Processing</option>
                                                    <option value="{{ route('changetripstatus', ['booking_id' => $booking->id, 'status' => 'In Progress']) }}">In Progress</option>
                                                    <option value="{{ route('changetripstatus', ['booking_id' => $booking->id, 'status' => 'Complete']) }}">Complete</option>
                                                  </select>
                                                </td>
                                                <td>{{ $booking->status }}</td>
                                                <td>
                                                    <a href="{{ route('messagepassenger', ['id'=> $booking->passenger_id ]) }}" class="btn"><i class="fa-brands fa-rocketchat"></i></a>
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