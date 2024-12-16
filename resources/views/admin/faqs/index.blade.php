@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('adminaddfaq') }}" class="btn btn-dark">Add New</a>
                </div>
            </div>
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
                                <div class="table responsive">
                                    
                                    <table class="table">
                                        
                                        <thead>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Created At</th>
                                        </thead>

                                        <tbody>
                                            
                                            @if($faqs->count() > 0)

                                                @foreach($faqs as $index => $faq)

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            {{ $faq->title }}<br><br>
                                                            <a href="{{ route('admineditfaq', ['id' => $faq->id]) }}" class="btn border text-black-50">Edit</a>
                                                            <a href="{{ route('admindeletefaq', ['id' => $faq->id]) }}" onclick="return confirm('Are you sure you want to delete this?');" class="btn border text-black-50">Delete</a>
                                                        </td>
                                                        <td>{{ substr($faq->description, 0, 80) }}...</td>
                                                        <td>{{ $faq->created_at }}</td>
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