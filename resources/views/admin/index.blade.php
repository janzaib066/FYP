@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Howdy, <span class="text-black fw-bold">Admin</span></h3>
        </div>

        <div class="col-md-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">Bookings</p>
                                <h3 class="rate-percentage">{{ $totalbookings }}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">Cars</p>
                                <h3 class="rate-percentage">{{ $totalcars }}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">Contact Queries</p>
                                <h3 class="rate-percentage">{{ $totalcontactquery }}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">FAQ's</p>
                                <h3 class="rate-percentage">{{ $totalfaq }}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">Trips</p>
                                <h3 class="rate-percentage">{{ $totaltrip }}</h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2">
                    
                        <div class="card">
                            <div class="card-body">
                                <p class="statistics-title">Users</p>
                                <h3 class="rate-percentage">{{ $totaluser }}</h3>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection