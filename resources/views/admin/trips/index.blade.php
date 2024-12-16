@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Trips</h3>
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
                                            <th>Owner Name</th>
                                            <th>Car</th>
                                            <th>Departure</th>
                                            <th>Destination</th>
                                            <th>Seats</th>
                                            <th>Fair Per Seat</th>
                                            <th>Departure Date</th>
                                            <th>Departure Time</th>
                                            <th>Bags Per Person</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </thead>

                                        <tbody>
                                            @if($trips->count() > 0)

                                                @foreach($trips as $index => $trip)

                                                    @php

                                                        $user = App\Models\User::find($trip->user_id);
                                                        $car = App\Models\Cars::find($trip->car_id);

                                                    @endphp

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <img src="{{ $user->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $user->name }}</strong><br>
                                                            <strong>Email: </strong> {{ $user->email }}<br>
                                                            <strong>Phone #: </strong> {{ $user->phone_number }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $car->picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $car->name }}</strong>
                                                        </td>
                                                        <td>{{ $trip->departure }}</td>
                                                        <td>{{ $trip->destination }}</td>
                                                        <td>{{ $trip->seats }}</td>
                                                        <td>{{ $trip->fair_per_seat }}</td>
                                                        <td>{{ $trip->departure_date }}</td>
                                                        <td>{{ $trip->departure_time }}</td>
                                                        <td>{{ $trip->bags_per_person }}</td>
                                                        <td>{{ $trip->created_at }}</td>
                                                        <td>{{ $trip->updated_at }}</td>
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