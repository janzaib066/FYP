<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Cars;
use App\Models\ContactQuery;
use App\Models\Faq;
use App\Models\Trip;
use App\Models\User;

class AdminController extends Controller {
    
    public function login() {

        return view('admin.login');

    }

    public function checkadminlogin(Request $request) {

        $check = Admin::where('email', $request->email)->count();

        if ($check > 0) {
            
            $admin = Admin::where('email', $request->email)->first();

            if ($request->password == $admin->password) {

                $admin_id = $request->session()->put('admin_id', $admin->id);

                return redirect()->route('adminindex');

            } else {

                return back()->with('danger','Password you entered is invalid!');
            }

        } else {
            
            return back()->with('danger','Email you entered is invalid!');

        }

    }

    public function adminlogout() {

        session()->forget('admin_id');

        return redirect()->route('adminlogin');

    }

    public function index() {

        $totalbookings = Booking::count();
        $totalcars = Cars::count();
        $totalcontactquery = ContactQuery::count();
        $totalfaq = Faq::count();
        $totaltrip = Trip::count();
        $totaluser = User::count();

        return view('admin.index')
            ->with('totalbookings', $totalbookings)
            ->with('totalcars', $totalcars)
            ->with('totalcontactquery', $totalcontactquery)
            ->with('totalfaq', $totalfaq)
            ->with('totaltrip', $totaltrip)
            ->with('totaluser', $totaluser);

    }

    public function profile() {

        $admin = Admin::find(session('admin_id'));

        return view('admin.profile')
            ->with('admin', $admin);

    }

    public function adminupdateprofile(Request $request) {

        $admin = Admin::find(session('admin_id'));

        $admin->email = $request->email;

        $admin->password = $request->password;

        $admin->save();

        return redirect()->back()->with('success', 'Profile Updated Successfully!');

    }

}
