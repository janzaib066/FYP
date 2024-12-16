@extends('layouts.app')

    @section('content')

    <section id="section-hero" aria-label="section" class="jarallax">
        <img src="images/background/2.jpg" class="jarallax-img" alt="">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                            <h4>Login</h4>
                            <div class="spacer-10"></div>
                            <form id="form_register" class="form-border" method="post" action="{{ route('checklogin') }}">
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
                                @csrf
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required />
                                </div>
                                <div class="field-set">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" required />
                                </div>
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                </div>
                            </form>
                            <div class="title-line">Or&nbsp;sign&nbsp;up</div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('register') }}">Don't have an account? Sign Up!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection