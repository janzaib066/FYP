@extends('layouts.app')

    @section('content')

        <section id="subheader" class="jarallax text-light">
            <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Register</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </section>
        
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Don't have an account? Register now.</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        
                        <div class="spacer-10"></div>
                        @if(Session::has('danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('danger') }}
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form name="contactForm" id='contact_form' class="form-border" method="post" action="{{ route('createaccount') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Name:</label>
                                        <input type='text' name='name' id='name' class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Email Address:</label>
                                        <input type='text' name='email' id='email' class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Phone:</label>
                                        <input type='text' name='phone_number' id='phone' class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Password:</label>
                                        <input type='text' name='password' id='password' class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="field-set">
                                        <label for="">Select Account Type</label>
                                        <select name="role" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Passenger">Passenger</option>
                                            <option value="Driver">Driver</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div id='submit' class="pull-left">
                                        <input type='submit' id='send_message' value='Register Now' class="btn-main color-2">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <a href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>

                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        
@endsection