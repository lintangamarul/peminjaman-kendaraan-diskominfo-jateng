<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        if ($request->category || $request->title){
            $cars= Car::where('title', 'like', '%' .$request->title.'%')
                    ->orWhereHas('categories', function($q) use($request){
                        $q->where('category_id', $request->category);
                    })
                    ->get();

        }
        else{
            $cars = Car::all();
        }

        return view('car-list', ['cars' => $cars, 'categories' => $categories]);
    }
}
