<header class="transparent scroll-light has-topbar">

    <div id="topbar" class="topbar-dark text-light">

        <div class="container">

            <div class="topbar-left xs-hide">
                <div class="topbar-widget">
                    <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+92 347 9987166</a></div>
                    <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@tripshare.com</a></div>
                </div>
            </div>

            <div class="topbar-right">
                <div class="topbar-widget">
                    <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>24/7 Online</a></div>
                </div>
            </div>

            <div class="clearfix"></div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="de-flex sm-pt10">

                    <div class="de-flex-col">

                        <div class="de-flex-col">

                            <div id="logo">

                                <a href="{{ route('index') }}">
                                    <img class="logo-1" src="{{ asset('images/logo-light.png') }}" alt="">
                                    <img class="logo-2" src="{{ asset('images/logo.png') }}" alt="">
                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="de-flex-col header-col-mid">

                        <ul id="mainmenu">

                            <li><a class="menu-item" href="{{ route('index') }}">Home</a></li>

                            <li><a class="menu-item" href="{{ route('about') }}">About Us</a></li>

                            <li><a class="menu-item" href="{{ route('faqs') }}">FAQ's</a></li>

                            <li><a class="menu-item" href="{{ route('trips') }}">All Trips</a></li>

                            @if (Session::has('user_id') == false)
                                <li>
                                    <a class="menu-item" href="{{ route('login') }}">My Account</a>
                                    <ul>
                                        <li><a class="menu-item" href="{{ route('login') }}">Login</a></li>
                                        <li><a class="menu-item" href="{{ route('register') }}">Register</a></li>
                                        
                                    </ul>
                                </li>
                            @else
                                @if(Session::get('role') == 'Driver')
                                    <li>
                                        <a class="menu-item" href="{{ route('driverdashboard') }}">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('driverdashboard') }}">Dashboard</a></li>
                                            <li><a class="menu-item" href="{{ route('mycars') }}">My Cars</a></li>
                                            <li><a class="menu-item" href="{{ route('mytrips') }}">My Trips</a></li>
                                            <li><a class="menu-item" href="{{ route('driverbookings') }}">My Bookings</a></li>
                                            <li><a class="menu-item" href="{{ route('profile') }}">My Profile</a></li>
                                            <li><a class="menu-item" href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @elseif(Session::get('role') == 'Passenger')
                                    <li>
                                        <a class="menu-item" href="">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="">Dashboard</a></li>
                                            <li><a class="menu-item" href="{{ route('bookings') }}">My Orders</a></li>
                                            <li><a class="menu-item" href="{{ route('favorites') }}">My Favorite Cars</a></li>
                                            <li><a class="menu-item" href="{{ route('profile') }}">My Profile</a></li>
                                            <li><a class="menu-item" href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                                    
                            @endif
                            
                            <li><a class="menu-item" href="{{ route('contact') }}">Contact Us</a></li>

                        </ul>

                    </div>

                    <div class="de-flex-col">

                        <div class="menu_side_area">
                            @if (Session::has('user_id') == false)
                                <a href="{{ route('login') }}" class="btn-main">Sign In</a>
                            @else

                                @if(Session::get('role') == 'Driver')
                                    <a href="{{ route('driverdashboard') }}" class="btn-main">Dashboard</a>
                                @elseif(Session::get('role') == 'Passenger')
                                    <a href="{{ route('passengerdashboard') }}" class="btn-main">Dashboard</a>
                                @endif

                            @endif
                            

                            <span id="menu-btn"></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="no-bottom no-top" id="content">

    <div id="top"></div>