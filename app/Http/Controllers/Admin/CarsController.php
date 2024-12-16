<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Cars;

class CarsController extends Controller {
    
    public function index() {

        $cars = Cars::all();

        return view('admin.cars.index')
            ->with('cars', $cars);

    }

}
