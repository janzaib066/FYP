<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller {
    
    public function index() {

        $drivers = User::where('role', 'Driver')->get();
        $passengers = User::where('role', 'Passenger')->get();

        return view('admin.users.index')
            ->with('drivers', $drivers)
            ->with('passengers', $passengers);

    }

}
