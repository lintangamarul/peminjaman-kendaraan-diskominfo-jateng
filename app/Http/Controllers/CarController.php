<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::all();
        return view ('car', ['cars' => $cars]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('car-add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'car_code' => 'required|unique:cars|max:255',
            'title' => 'required|max:255',
        ]);

        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title. '-' .now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $car = Car::create($request->all());
        $car->categories()->sync($request->categories);
        return redirect('cars')->with('status', 'Cars Added Succesfully');
    }

    public function edit ($slug)
    {
        $car = Car::where('slug', $slug)->first();
        $categories = Category::all();
        return view('car-edit', ['categories'=>$categories, 'car'=>$car]);
    }

    public function update (Request $request, $slug)
    {
        // $choosenCategories = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title. '-' .now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }


        $car = Car::where('slug', $slug)->first();
        $car->update($request->all());

        if($request->categories){
            $car->categories()->sync($request->categories);
        }

        return redirect('cars')->with('status', 'Cars Updated Succesfully');
    }

    public function delete($slug)
    {
        $car = Car::where('slug', $slug)->first();
        return view('car-delete', ['car'=>$car]);
    }

    public function destroy($slug)
    {
        $car = Car::where('slug', $slug)->first();
        $car->delete();
        return redirect('cars')->with('status', 'Car Deleted Succesfully');
    }

    public function deletedCar()
    {
        $deletedCars = Car::onlyTrashed()->get();
        return view ('car-deleted-list', ['deletedCars'=>$deletedCars]);
    }

    public function restore ($slug)
    {
        $car = Car::withTrashed()->where('slug', $slug)->first();
        $car->restore();
        return redirect('cars')->with('status', 'Car Restored Succesfully');
    }
}


