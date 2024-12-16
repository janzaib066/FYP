@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Bookings</h3>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    
                                    <table class="table">
                                        
                                        <thead>
                                            <th>#</th>
                                            <th>Trip</th>
                                            <th>Driver</th>
                                            <th>Booked By</th>
                                            <th>Departure Date</th>
                                            <th>Departure Time</th>
                                            <th>Fare</th>
                                        </thead>

                                        <tbody>
                                            @if($bookings->count() > 0)

                                                @foreach($bookings as $index => $booking)

                                                    @php

                                                        $driver = App\Models\User::find($booking->driver_id);
                                                        $bookedby = App\Models\User::find($booking->passenger_id);

                                                    @endphp

                                                    <tr>
                                                        <td>{{ $index = 1 }}</td>
                                                        <td>
                                                            {{ $booking->departure }} - {{ $booking->destination }}<br><br>
                                                            <a href="{{ route('bookingdetail', ['id' => $booking->id]) }}" class="text-decoration-none font-weight-500 text-success btn">View Details >></a>
                                                        </td>
                                                        <td>
                                                            <img src="{{ $driver->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $driver->name }}</strong><br>
                                                            <strong>Email: </strong> {{ $driver->email }}<br>
                                                            <strong>Phone #: </strong> {{ $driver->phone_number }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $bookedby->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $bookedby->name }}</strong><br>
                                                            <strong>Email: </strong> {{ $bookedby->email }}<br>
                                                            <strong>Phone #: </strong> {{ $bookedby->phone_number }}
                                                        </td>
                                                        <td>{{ $booking->departure_date }}</td>
                                                        <td>{{ $booking->departure_time }}</td>
                                                        <td>Rs.{{ $booking->fair }}</td>
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

@endsection