<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama = "Fahmi Nuradi";

        // menampilkan object
        $daftarMobil = [
            (object) [
                'id' => 1,
                'merk' => 'Toyota',
                'model' => 'Avanza',
                'jenis' => 'MPV',
                'tahun' => 2022,
                'harga_sewa' => 350000,
            ],
            (object) [
                'id' => 2,
                'merk' => 'Honda',
                'model' => 'Civic Turbo',
                'jenis' => 'Sedan',
                'tahun' => 2023,
                'harga_sewa' => 800000,
            ],
            (object) [
                'id' => 3,
                'merk' => 'Mitsubishi',
                'model' => 'Pajero Sport',
                'jenis' => 'SUV',
                'tahun' => 2021,
                'harga_sewa' => 900000,
            ],
            (object) [
                'id' => 4,
                'merk' => 'Wuling',
                'model' => 'Air EV',
                'jenis' => 'Electric Vehicle',
                'tahun' => 2023,
                'harga_sewa' => 500000,
            ],
        ];

        return view('photos.index', compact('nama', 'daftarMobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
