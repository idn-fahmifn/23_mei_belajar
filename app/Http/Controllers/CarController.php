<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(10);

        return view('cars.index', [
            'cars' => $cars,
        ]);
    }

    public function show($parameter) 
    {
        $data = Car::findOrFail($parameter); //mencari berdasarkan ID yang dipilih.
        return view('cars.detail', [
            'data' => $data
        ]);
    }
}
