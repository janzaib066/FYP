@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <h3>Contact Queries</h3>
        </div>

        <div class="col-sm-12">

            <div class="home-tab">
                
                <div class="row">

                    <div class="col-md-12">
                        
                        <div class="card">
                            
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    
                                    <table class="table">
                                        
                                        <thead>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Phone Number</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                        </thead>

                                        <tbody>
                                            
                                            @if($queries->count() > 0)

                                               @foreach($queries as $index => $query)
                                               
                                                   <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            {{ $query->name }}<br><br>
                                                            <a href="{{ route('adminremovequery', ['id' => $query->id]) }}" class="btn border text-black-50" onclick="return confirm('Are you sure you want to remove this query?');">Remove</a>
                                                        </td>
                                                        <td>{{ $query->email }}</td>
                                                        <td>{{ $query->subject }}</td>
                                                        <td>{{ $query->phone_number }}</td>
                                                        <td>{{ $query->message }}</td>
                                                        <td>{{ $query->created_at }}</td>
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