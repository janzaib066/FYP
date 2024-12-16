@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <div class="row">
                
                <div class="col-md-6">
                    <h3>Booking Details</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('adminbookingindex') }}" class="btn btn-dark shadow">Back to Bookings</a>
                </div>

            </div>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-6">
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            
                                            <table class="table">
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td><strong>Departure Location</strong></td>
                                                        <td>{{ $booking->departure }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Destination Location</strong></td>
                                                        <td>{{ $booking->destination }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Fair</strong></td>
                                                        <td>{{ $booking->fair }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Departure Date</strong></td>
                                                        <td>{{ $booking->departure_date }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Departure Time</strong></td>
                                                        <td>{{ $booking->departure_time }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Bags Per Person</strong></td>
                                                        <td>{{ $booking->bags_per_person }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Booking Date</strong></td>
                                                        <td>{{ $booking->booking_date }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Status</strong></td>
                                                        <td>{{ $booking->status }}</td>
                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card">
                            
                            <div class="card-body">
                                
                                <h4 class="mb-3"><strong>Car Details</strong></h4>

                                <div class="table-responsive">
                                    
                                    <table class="table">
                                    
                                        <tbody>
                                            
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td>{{ $car->name }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Model</strong></td>
                                                <td>{{ $car->model }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Make</strong></td>
                                                <td>{{ $car->make }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Color</strong></td>
                                                <td>{{ $car->color }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Car Number</strong></td>
                                                <td>{{ $car->car_number }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Picture</strong></td>
                                                <td><img src="{{ $car->picture }}" class="img-thumbnail" style="width: 100px;height: 100px;"></td>
                                            </tr>

                                            <tr>
                                                <td><strong>Vehicle Type</strong></td>
                                                <td>{{ $car->vehicle_type }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Body Type</strong></td>
                                                <td>{{ $car->body_type }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Engine Capacity</strong></td>
                                                <td>{{ $car->engine_capacity }}</td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                
                                <h4 class="mb-3"><strong>Driver Details</strong></h4>

                                <div class="table-responsive">
                                    
                                    <table class="table">
                                    
                                        <tbody>
                                            
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td>{{ $driver->name }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td>{{ $driver->email }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Phone Number</strong></td>
                                                <td>{{ $driver->phone_number }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Profile Picture</strong></td>
                                                <td><img src="{{ $driver->profile_picture }}" class="img-thumbnail" style="width: 100px;height: 100px;"></td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                        <div class="card">
                            
                            <div class="card-body">
                                
                                <h4 class="mb-3"><strong>Passenger Details</strong></h4>

                                <div class="table-responsive">
                                    
                                    <table class="table">
                                    
                                        <tbody>
                                            
                                            <tr>
                                                <td><strong>Name</strong></td>
                                                <td>{{ $passenger->name }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td>{{ $passenger->email }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Phone Number</strong></td>
                                                <td>{{ $passenger->phone_number }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Profile Picture</strong></td>
                                                <td><img src="{{ $passenger->profile_picture }}" class="img-thumbnail" style="width: 100px;height: 100px;"></td>
                                            </tr>

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