@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>My Profile</h3>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-4">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('adminupdateprofile') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ $admin->email }}" placeholder="Enter Your Email" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="password" value="{{ $admin->password }}" placeholder="Enter Your Password" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-dark w-100 py-3 text-white">Update</button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection