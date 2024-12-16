@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>My Cars</h1>
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
                                            <h4>My Cars</h4>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="{{ route('createcars') }}" class="btn btn-dark">Add New</a>
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
                                                
                                                <table class="table" style="font-size: 10px;">
                                                    
                                                    <thead>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Model</th>
                                                        <th>Make</th>
                                                        <th>Color</th>
                                                        <th>Car Number</th>
                                                        <th>Vehicle Type</th>
                                                        <th>Body Type</th>
                                                        <th>Engine Capacity</th>
                                                        <th>Created At</th>
                                                    </thead>

                                                    <tbody>
                                                        @if($cars->count() > 0)

                                                            @foreach($cars as $index => $car)
                                                                <tr>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td>
                                                                        <img src="{{ $car->picture }}" class="img-thumbnail" style="width: 25px;height: 25px;">
                                                                        {{ $car->name }}<br>
                                                                        <a href="{{ route('editcar', ['id' => $car->id]) }}">Edit</a> / <a href="{{ route('removecar', ['id' => $car->id]) }}" onclick="return confirm('Are you sure you want to remove this car?');">Delete</a>
                                                                    </td>
                                                                    <td>{{ $car->model }}</td>
                                                                    <td>{{ $car->make }}</td>
                                                                    <td>{{ $car->color }}</td>
                                                                    <td>{{ $car->car_number }}</td>
                                                                    <td>{{ $car->vehicle_type }}</td>
                                                                    <td>{{ $car->body_type }}</td>
                                                                    <td>{{ $car->engine_capacity }}</td>
                                                                    <td>{{ $car->created_at }}</td>
                                                                </tr>
                                                            @endforeach

                                                        @else
                                                            <tr>
                                                                <td colspan="7">No Data Found!</td>
                                                            </tr>
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