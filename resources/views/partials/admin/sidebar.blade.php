@if(empty(session('admin_id')))
    <script>
        window.location.href = "{{ route('adminlogin') }}";
    </script>
    @php
        exit;
    @endphp
@endif
<div class="container-fluid page-body-wrapper">
    
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminindex') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admincarsindex') }}">
                    <i class="fa-solid fa-car me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Cars</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admintripindex') }}">
                    <i class="fa-solid fa-road me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Trips</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminbookingindex') }}">
                    <i class="fa fa-book me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Bookings</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminusersindex') }}">
                    <i class="fa-sharp fa-solid fa-users me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminfaqindex') }}">
                    <i class="fa-regular fa-circle-question me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">FAQ's</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admincontactqueriesindex') }}">
                    <i class="fa-solid fa-headset me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Contact Queries</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminprofileindex') }}">
                    <i class="fa-regular fa-user me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">My Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminlogout') }}" onclick="return confirm('Are you sure you want to logout?');">
                    <i class="fa-solid fa-right-from-bracket me-4" style="font-size: 20px;"></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>

        </ul>
    </nav>
    
    <div class="main-panel">
        <div class="content-wrapper">
