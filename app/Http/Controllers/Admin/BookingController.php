<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Trip;
use App\Models\User;
use App\Models\Cars;
use App\Models\Booking;

class BookingController extends Controller {
    
    public function index() {

        $bookings = Booking::join('cars', 'bookings.car_id', 'cars.id')
            ->select('bookings.*', 'cars.name', 'cars.picture')
            ->get();

        return view('admin.bookings.index')
            ->with('bookings', $bookings);

    }

    public function detail($id) {

        $booking = Booking::find($id);

        $trip = Trip::find($booking->trip_id);
        $car = Cars::find($booking->car_id);
        $driver = User::find($booking->driver_id);
        $passenger = User::find($booking->passenger_id);

        return view('admin.bookings.detail')
            ->with('booking', $booking)
            ->with('trip', $trip)
            ->with('car', $car)
            ->with('driver', $driver)
            ->with('passenger', $passenger);

    }

}
