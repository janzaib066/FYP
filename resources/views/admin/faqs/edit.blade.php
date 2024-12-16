@extends('layouts.admin')

    @section('content')

    <div class="row">

        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Edit FAQ</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('adminfaqindex') }}" class="btn btn-dark">Go Back</a>
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
                                <form action="{{ route('adminupdatefaq') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="faq_id" value="{{ $faq->id }}">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" name="title" value="{{ $faq->title }}" placeholder="Enter Title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" cols="5" rows="5" placeholder="Write details here..." class="form-control" required>{{ $faq->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark py-3 px-5 text-white">Save</button>
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