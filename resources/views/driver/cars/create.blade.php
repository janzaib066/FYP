@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Add Cars</h1>
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

                                <div class="col-md-12 mb-3">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <h4>Add Cars</h4>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="{{ route('mycars') }}" class="btn btn-dark">Back to Cars</a>
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
                                            
                                            <form action="{{ route('savecar') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="">Car Name</label>
                                                    <input type="text" name="name" placeholder="Enter Car Name" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Model</label>
                                                    <input type="text" name="model" placeholder="Enter Car Model" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Make</label>
                                                    <input type="text" name="make" placeholder="Enter Car Make" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Color</label>
                                                    <input type="text" name="color" placeholder="Enter Car Color" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Number</label>
                                                    <input type="text" name="car_number" placeholder="Enter Car Number" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Picture</label>
                                                    <input type="file" name="picture" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Gallery</label>
                                                    <input type="file" name="gallery[]" class="form-control" multiple>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Vehicle Type</label>
                                                    <select name="vehicle_type" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <option value="Car">Car</option>
                                                        <option value="Van">Van</option>
                                                        <option value="Minibus">Minibus</option>
                                                        <option value="Prestige">Prestige</option>
                                                    </select>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Vehicle Body Type</label>
                                                    <select name="body_type" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <option value="Convertible">Convertible</option>
                                                        <option value="Coupe">Coupe</option>
                                                        <option value="Exotic Cars">Exotic Cars</option>
                                                        <option value="Hatchback">Hatchback</option>
                                                        <option value="Minivan">Minivan</option>
                                                        <option value="Pickup Truck">Pickup Truck</option>
                                                        <option value="Sedan">Sedan</option>
                                                        <option value="Sports Car">Sports Car</option>
                                                        <option value="Station Wagon">Station Wagon</option>
                                                        <option value="SUV">SUV</option>
                                                    </select>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Vehicle Body Type</label>
                                                    <select name="engine_capacity" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <option value="0 - 1000">0 - 1000</option>
                                                        <option value="1000 - 2000">1000 - 2000</option>
                                                        <option value="2000 - 4000">2000 - 4000</option>
                                                        <option value="4000 - 6000">4000 - 6000</option>
                                                        <option value="6000+">6000+</option>
                                                    </select>
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