<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cars;

use App\Models\Trip;

class TripController extends Controller {
    
    public function index() {

        $trips = Trip::where('trips.user_id', session('user_id'))
            ->join('cars', 'trips.car_id', 'cars.id')
            ->select('trips.*', 'cars.name', 'cars.picture')
            ->get();

        return view('driver.trips.index')
            ->with('trips', $trips);

    }

    public function create() {

        $cars = Cars::where('user_id', session('user_id'))->get();

        return view('driver.trips.create')
            ->with('cars', $cars);

    }

    public function save(Request $request) {

        $trip = new Trip;

        $trip->user_id = session('user_id');

        $trip->car_id = $request->car_id;
        $trip->departure = $request->departure;
        $trip->destination = $request->destination;
        $trip->seats = $request->seats;
        $trip->fair_per_seat = $request->fair_per_seat;
        $trip->departure_date = $request->departure_date;
        $trip->departure_time = $request->departure_time;
        $trip->bags_per_person = $request->bags_per_person;

        $trip->save();

        return redirect()->back()->with('success', 'Trip Saved Successfully!');

    }

    public function edit($id) {

        $trip = Trip::find($id);

        return view('driver.trips.edit')
            ->with('trip', $trip);

    }

    public function update(Request $request) {

        $trip = Trip::find($request->trip_id);

        $trip->departure = $request->departure;

        $trip->destination = $request->destination;

        $trip->seats = $request->seats;

        $trip->fair_per_seat = $request->fair_per_seat;

        $trip->departure_date = $request->departure_date;

        $trip->departure_time = $request->departure_time;

        $trip->bags_per_person = $request->bags_per_person;

        $trip->save();

        return redirect()->route('mytrips')->with('success', 'Trip Updated Successfully!');

    }

    public function destroy($id) {

        $trip = Trip::find($id);

        $trip->delete();

        return redirect()->back()->with('danger', 'Trip Removed Successfully!');

    }

}
