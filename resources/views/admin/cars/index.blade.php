@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Cars</h3>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    
                                    <table class="table" style="font-size: 12px;">
                                        
                                        <thead>
                                            <th>#</th>
                                            <th>Car Name</th>
                                            <th>Owner</th>
                                            <th>Model</th>
                                            <th>Make</th>
                                            <th>Color</th>
                                            <th>Car Number</th>
                                            <th>Vehicle Type</th>
                                            <th>Body Type</th>
                                            <th>Engine Capacity</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </thead>

                                        <tbody>
                                            @if($cars->count() > 0)

                                                @foreach($cars as $index => $car)

                                                    @php
                                                        $user = App\Models\User::find($car->user_id);
                                                    @endphp

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <img src="{{ $car->picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $car->name }}</strong>
                                                        </td>
                                                        <td>
                                                            <img src="{{ $user->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $user->name }}</strong><br>
                                                            <strong>Phone #:</strong> {{ $user->phone_number }}<br>
                                                            <strong>Email:</strong> {{ $user->email }}
                                                        </td>
                                                        <td>{{ $car->model }}</td>
                                                        <td>{{ $car->make }}</td>
                                                        <td>{{ $car->color }}</td>
                                                        <td>{{ $car->car_number }}</td>
                                                        <td>{{ $car->vehicle_type }}</td>
                                                        <td>{{ $car->body_type }}</td>
                                                        <td>{{ $car->engine_capacity }}</td>
                                                        <td>{{ $car->created_at }}</td>
                                                        <td>{{ $car->updated_at }}</td>
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