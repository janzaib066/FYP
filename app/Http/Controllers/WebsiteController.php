<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\Models\Faq;

use App\Models\User;

use App\Models\Trip;

use App\Models\Cars;

use App\Models\Favorite;

use App\Models\CarGallery;

use App\Models\ContactQuery;

class WebsiteController extends Controller {
    
    public function index() {

        $faqs = Faq::all();

        $trips = Trip::join('cars', 'trips.car_id', 'cars.id')
            ->select('trips.*', 'cars.name', 'cars.model', 'cars.make', 'cars.picture', 'cars.body_type')
            ->get();

        return view('index')
            ->with('faqs', $faqs)
            ->with('trips', $trips);

    }

    public function about() {

        return view('about');

    }

    public function contact() {

        return view('contact');

    }

    public function submitquery(Request $request) {

        $query = new ContactQuery;

        $query->name = $request->name;
        $query->email = $request->email;
        $query->subject = $request->subject;
        $query->phone_number = $request->phone_number;
        $query->message = $request->message;

        $query->save();

        return redirect()->back()->with('success', 'Your Query has been recieved. We will contact you shortly!');

    }

    public function faqs() {

        $faqs = Faq::all();

        return view('faqs')
            ->with('faqs', $faqs);

    }

    public function login() {

        return view('login');

    }

    public function checklogin(Request $request) {

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return back()->with('danger', 'Voer een geldig e-mailformaat in.');
        } else {

            $check = User::where('email', $request->email)->first();
            $count = User::where('email', $request->email)->count();
            
            if ($count > 0) {
                
                if (\Hash::check($request->password, $check->password)) {

                    $user_id = $request->session()->put('user_id', $check->id);
                    $user_role = $request->session()->put('role', $check->role);
                    
                    if ($check->role == "Driver") {
                        
                        return redirect()->route('driverdashboard');

                    } elseif ($check->role == "Passenger") {
                        
                        return redirect()->route('passengerdashboard');

                    }

                } else {
                    return back()->with('danger', 'Email or password is invalid.');
                }

            } else {
                return back()->with('danger', 'Email or password is invalid.');
            }

        }

    }

    public function register() {

        return view('register');

    }

    public function createaccount(Request $request) {

        $check = User::where('email', $request->email)->count();

        if ($check > 0) {
            
            return redirect()->back()->with('danger', 'Email is already registered. Please try another.');

        } else {

            $user = new User;

            $user->name = $request->name;

            $user->email = $request->email;

            $user->password = Hash::make($request->password);

            $user->phone_number = $request->phone_number;
            
            $user->role = $request->role;

            $user->save();

            return redirect()->back()->with('success', 'Account Created Successfully!');

        }

    }

    public function trips() {

        $trips = Trip::join('cars', 'trips.car_id', 'cars.id')
            ->select('trips.*', 'cars.name', 'cars.model', 'cars.make', 'cars.picture', 'cars.body_type')
            ->get();

        return view('trips')
            ->with('trips', $trips);

    }

    public function tripsingle($id) {

        $trip = Trip::find($id);

        $car = Cars::find($trip->car_id);

        $gallery = CarGallery::where('car_id', $car->id)->get();

        $driver = User::find($trip->user_id);

        return view('tripsingle')
            ->with('trip', $trip)
            ->with('car', $car)
            ->with('gallery', $gallery)
            ->with('driver', $driver);

    }

    public function addtofavorite($trip_id, $driver_id) {

        $check = Favorite::where('trip_id', $trip_id)
            ->where('driver_id', $driver_id)
            ->where('passenger_id', session('user_id'))
            ->count();

        if ($check > 0) {
            return redirect()->back()->with('danger', 'Already added to favorite.');
        } else {

            $favorite = new Favorite;

            $favorite->trip_id = $trip_id;
            $favorite->driver_id = $driver_id;
            $favorite->passenger_id = session('user_id');

            $favorite->save();

            return redirect()->back()->with("success", 'Added to favorite.');

        }

    }

}
