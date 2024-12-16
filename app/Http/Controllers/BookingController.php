<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trip;

use App\Models\Booking;

class BookingController extends Controller {
    
    public function makebooking(Request $request) {

        $trip = Trip::find($request->trip_id);

        $countBookedSeats = Booking::where('trip_id', $request->trip_id)->count();

        if ($countBookedSeats < $trip->seats) {
            
            $checkBookedAlready = Booking::
                where('trip_id', $request->trip_id)
                ->where('car_id', $request->car_id)
                ->where('driver_id', $request->driver_id)
                ->where('passenger_id', $request->passenger_id)
                ->count();

            if ($checkBookedAlready > 0) {
                return redirect()->back()->with('danger', 'You already have made booking with this Driver.');
            } else {

                $booking = new Booking;

                $booking->trip_id = $request->trip_id;
                $booking->car_id = $request->car_id;
                $booking->driver_id = $request->driver_id;
                $booking->passenger_id = $request->passenger_id;
                $booking->departure = $request->departure;
                $booking->destination = $request->destination;
                $booking->fair = $request->fair;
                $booking->departure_date = $request->departure_date;
                $booking->departure_time = $request->departure_time;
                $booking->bags_per_person = $request->bags_per_person;
                $booking->booking_date = $request->booking_date;

                $booking->save();

                return redirect()->back()->with('success', 'Your trip has been booked with this Driver. Chat with him to get further details.');

            }

        } else {
            return redirect()->back()->with('danger', 'Seats of this trip are already full.');
        }


    }

}
