<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Cars;

use App\Models\Trip;

use App\Models\Booking;

use App\Models\Favorite;

class DashboardController extends Controller {
    
    public function index() {

        $cars = Cars::where('user_id', session('user_id'))->count();
        $trips = Trip::where('user_id', session('user_id'))->count();

        return view('driver.index')
            ->with('cars', $cars)
            ->with('trips', $trips);

    }

    public function bookings() {

        $bookings = Booking::where('passenger_id', session('user_id'))->get();

        return view('passenger.bookings')
            ->with('bookings', $bookings);

    }

    public function favorites() {

        $favorites = Favorite::where('passenger_id', session('user_id'))
            ->get();
        
        return view('passenger.favorites')
            ->with('favorites', $favorites);

    }

    public function removetripfromfavorite($id) {

        $fav = Favorite::find($id);

        $fav->delete();

        return redirect()->back()->with('success', 'Trip removed from favorite.');

    }

    public function driverbookings() {

        $bookings = Booking::where('driver_id', session('user_id'))->get();

        return view('driver.driverbookings')
            ->with('bookings', $bookings);

    }

    public function changetripstatus($booking_id, $status) {

        $booking = Booking::find($booking_id);

        $booking->status = $status;

        $booking->save();

        return redirect()->back()->with('success', 'Status Updated.');

    }

    public function passengerdashboard() {

        return view('passenger.index');

    }

    public function profile() {

        $user = User::find(session('user_id'));

        return view('driver.profile')
            ->with('user', $user);

    }

    public function updateprofile(Request $request) {

        $user = User::find(session('user_id'));

        $user->name = $request->name;
        $user->phone_number = $request->phone_number;

        if ($request->file('profile_picture')) {

            $imageName = time().'.'.request()->profile_picture->getClientOriginalExtension();

            request()->profile_picture->move(public_path('images/user'), $imageName);

            $user->profile_picture = asset("images/user/" . $imageName);

        }

        $user->save();

        return redirect()->back()->with('success', 'Profile Updated Successfully!');

    }

    public function logout() {

        session()->forget('user_id');
        session()->forget('role');

        return redirect()->route('login');

    }

}
