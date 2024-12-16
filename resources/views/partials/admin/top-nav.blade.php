<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="{{ route('adminindex') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('adminindex') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        
        <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">

                <a class="nav-link btn border px-4 bg-white" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>My Account</strong> <i class="fa-solid fa-angle-down" style="font-size: 12px;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    
                    <a class="dropdown-item" href="{{ route('adminprofileindex') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
                    <a class="dropdown-item" href="{{ route('adminlogout') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>

                </div>

            </li>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>

    </div>
</nav>