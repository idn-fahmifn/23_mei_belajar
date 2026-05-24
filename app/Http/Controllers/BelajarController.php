<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    // buatkan sebuah fungsi sesuai dengan yang didefinisikan oleh route
    public function proses(Request $request)
    {
        
        // Membuat array berisi data dummy dalam bentuk object
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

        return response()->json([
            'status' => 'success',
            'data' => $daftarMobil
        ]);
    }

    public function test()
    {
        //
    }

    public function barang()
    {
        return 'Ini adalah perintah dari controller. ini respon barang';
    }
}
