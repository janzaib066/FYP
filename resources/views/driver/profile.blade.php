@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('images/background/14.jpg') }}" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Dashboard</h1>
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

                            <div class="row">

                                <div class="col-lg-12">

                                    <h4>My Profile</h4>

                                    <div class="row">

                                        <div class="col-md-12">
                                            @if(Session::has('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <form action="{{ route('updateprofile') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Enter Your Name" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter Your Email" class="form-control" readonly>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Phone Number</label>
                                                    <input type="number" name="phone_number" value="{{ $user->phone_number }}" placeholder="Enter Your Phone Number" class="form-control" required>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Profile Picture</label><br>
                                                    <img src="{{ $user->profile_picture }}" class="img-thumbnail mb-3" style="width: 100px;height: 100px;">
                                                    <input type="file" name="profile_picture" class="form-control">
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