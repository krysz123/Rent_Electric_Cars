<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Models;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    public function index()
    {

        $cars = Cars::paginate(2);
        return view('cars.index', [
            'cars' => $cars,
            'brands' => CarBrand::all()
        ]);
    }

    public function create()
    {
        return view('cars.create', [
            'brands' => CarBrand::all()
        ]);
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'model' => 'required|max:500',
            'range' => 'required|numeric|min:0',
            'price' => 'required|numeric|between:0,999999.99',
            'image' => 'image|mimes:jpg,png',
            'brand_id' => 'required'
        ]);

        $newCar = new Cars($validation);

        $image = $request->file('image');

        if ($image) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/' . $filename;
            $image->move(public_path('storage/images'), $filename);

            $newCar->image_path = $path;
            $newCar->save();
        }


        return redirect(route('cars.index'));
    }

    public function edit(Cars $cars)
    {
        return view('cars.edit', [
            'cars' => $cars,
            'brands' => CarBrand::all()
        ]);
    }

    public function update(Request $request, Cars $cars)
    {
        $cars->fill($request->all());

        $data = $request->all();

        $cars->model = $data['model'];
        $cars->brand_id = $data['brand_id'];
        $cars->range = $data['range'];
        $cars->price = $data['price'];

        $image = $request->file('image');

        if ($image) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/' . $filename;
            $image->move(public_path('storage/images'), $filename);

            $cars->image_path = $path;
            $cars->save();
        }

        return redirect(route('cars.index'));
    }

    public function destroy(Cars $cars)
    {
        $cars->delete();
        return redirect(route('cars.index'))->with('success', 'Car deleted successfully');
    }
}
