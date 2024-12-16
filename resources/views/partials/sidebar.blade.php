@if(empty(session('user_id')))
    <script>
        window.location.href = "{{ route('login') }}";
    </script>
    @php
        exit;
    @endphp
@else
    @php
        $user = App\Models\User::find(session('user_id'));
    @endphp
@endif
<div class="card p-4 rounded-5">

    <div class="profile_avatar">

        <div class="profile_img">
            <img src="{{ $user->profile_picture }}" style="height: 150px;">
        </div>

        <div class="profile_name">
            <h4>
                {{ $user->name }}
                <span class="profile_username text-gray">{{ $user->email }}</span>
            </h4>
            <span class="badge bg-black">{{ $user->role }}</span>
        </div>

    </div>

    <div class="spacer-20"></div>

    <ul class="menu-col">

        @if(session('role') == 'Driver')

            <li>
                <a href="{{ route('driverdashboard') }}" class=""><i class="fa fa-home"></i>Dashboard</a>
            </li>

            <li>
                <a href="{{ route('mycars') }}"><i class="fa fa-car"></i>My Cars</a>
            </li>

            <li>
                <a href="{{ route('mytrips') }}"><i class="fa fa-road"></i>My Trips</a>
            </li>

            <li>
                <a href="{{ route('drivermessages') }}"><i class="fa fa-calendar"></i>Messenger</a>
            </li>

            <li>
                <a href="{{ route('driverbookings') }}"><i class="fa fa-book"></i>My Bookings</a>
            </li>

        @else

            <li>
                <a href="{{ route('passengerdashboard') }}"><i class="fa fa-home"></i>My Dashboard</a>
            </li>

            <li>
                <a href="{{ route('bookings') }}"><i class="fa fa-calendar"></i>My Bookings</a>
            </li>

            <li>
                <a href="{{ route('messages') }}"><i class="fa fa-calendar"></i>Messenger</a>
            </li>

            <li>
                <a href="{{ route('favorites') }}"><i class="fa fa-car"></i>My Favorite Cars</a>
            </li>

        @endif

        <li>
            <a href="{{ route('profile') }}"><i class="fa fa-user"></i>My Profile</a>
        </li>


        <li>
            <a href="{{ route('logout') }}" onclick="return confirm('Are you sure you want to logout?');"><i class="fa fa-sign-out"></i>Logout</a>
        </li>

    </ul>

</div>