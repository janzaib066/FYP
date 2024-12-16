<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Cars;
use App\Models\CarGallery;

class CarController extends Controller {
    
    public function index() {

        $cars = Cars::where('user_id', session('user_id'))->get();

        return view('driver.cars.index')
            ->with('cars', $cars);

    }

    public function create() {

        return view('driver.cars.create');

    }

    public function save(Request $request) {

        $car = new Cars;
        $car->user_id = session('user_id');
        $car->name = $request->name;
        $car->model = $request->model;
        $car->make = $request->make;
        $car->color = $request->color;
        $car->car_number = $request->car_number;

        if ($request->file('picture')) {

            $imageName = time().'.'.request()->picture->getClientOriginalExtension();

            request()->picture->move(public_path('images/cars'), $imageName);

            $car->picture = asset("images/cars/" . $imageName);

        }

        $car->vehicle_type = $request->vehicle_type;
        $car->body_type = $request->body_type;
        $car->engine_capacity = $request->engine_capacity;
        
        $car->save();

        if($request->hasfile('gallery')) {

            foreach($request->file('gallery') as $image) {

                $name=$image->getClientOriginalName();
                $image->move(public_path('images/cars/gallery'), $name);  
                
                $cargallery = new CarGallery;

                $cargallery->car_id = $car->id;
                $cargallery->image = asset("images/cars/gallery/" . $name);
                $cargallery->save();

            }

         }
    
        return redirect()->back()->with('success', 'Car Saved Successfully!');

    }

    public function edit($id) {

        $car = Cars::find($id);

        $gallery = CarGallery::where('car_id', $id)->get();

        return view('driver.cars.edit')
            ->with('car', $car)
            ->with('gallery', $gallery);

    }

    public function removegallery($id) {

        $gallery = CarGallery::find($id);

        $gallery->delete();

        return redirect()->back()->with('danger', 'Gallery Image Removed Successfully!');

    }

    public function update(Request $request) {

        $car = Cars::find($request->car_id);
        $car->name = $request->name;
        $car->model = $request->model;
        $car->make = $request->make;
        $car->color = $request->color;
        $car->car_number = $request->car_number;

        if ($request->file('picture')) {

            $imageName = time().'.'.request()->picture->getClientOriginalExtension();

            request()->picture->move(public_path('images/cars'), $imageName);

            $car->picture = asset("images/cars/" . $imageName);

        }

        $car->vehicle_type = $request->vehicle_type;
        $car->body_type = $request->body_type;
        $car->engine_capacity = $request->engine_capacity;
        
        $car->save();

        if($request->hasfile('gallery')) {

            foreach($request->file('gallery') as $image) {

                $name=$image->getClientOriginalName();
                $image->move(public_path('images/cars/gallery'), $name);  
                
                $cargallery = new CarGallery;

                $cargallery->car_id = $request->car_id;
                $cargallery->image = asset("images/cars/gallery/" . $name);
                $cargallery->save();

            }

         }
    
        return redirect()->back()->with('success', 'Car Updated Successfully!');

    }

    public function destroy($id) {

        $remove = Cars::find($id);

        $remove->delete();

        return redirect()->back()->with('danger', 'Car Removed Successfully!');

    }

}
