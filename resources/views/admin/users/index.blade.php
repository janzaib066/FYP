@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Users</h3>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-12 mb-4">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    
                                    <h4 class="mb-4"><strong>Passengers</strong></h4>

                                    <table class="table">
                                        
                                        <thead>
                                        
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Account Created</th>
                                        </thead>

                                        <tbody>
                                            @if($passengers->count() > 0)

                                                @foreach($passengers as $index => $pass)

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <img src="{{ $pass->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $pass->name }}</strong>
                                                        </td>
                                                        <td>
                                                            <a href="mailto:{{ $pass->email }}">{{ $pass->email }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="tel:{{ $pass->phone_number }}">{{ $pass->phone_number }}</a>
                                                        </td>
                                                        <td>{{ $pass->created_at }}</td>
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

                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    
                                    <h4 class="mb-4"><strong>Drivers</strong></h4>

                                    <table class="table">
                                        
                                        <thead>
                                        
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Account Created</th>
                                        </thead>

                                        <tbody>
                                            @if($drivers->count() > 0)

                                                @foreach($drivers as $index => $driver)

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <img src="{{ $driver->profile_picture }}" class="img-thumbnail" style="width: 25px;height: 25px;"> <strong>{{ $driver->name }}</strong>
                                                        </td>
                                                        <td>
                                                            <a href="mailto:{{ $driver->email }}">{{ $driver->email }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="tel:{{ $driver->phone_number }}">{{ $driver->phone_number }}</a>
                                                        </td>
                                                        <td>{{ $driver->created_at }}</td>
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