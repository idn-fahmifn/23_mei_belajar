<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    // buatkan sebuah fungsi sesuai dengan yang didefinisikan oleh route
    public function proses(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'],
            'umur' => ['required', 'integer', 'min:10', 'max:60'],
        ], [

            // pesan custom saat error
            // field nama
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama wajib berbentuk karakter',
            'nama.min' => 'Nama wajib minimal 3 Karakter',
            'nama.max' => 'Nama wajib maksimal 30 Karakter',

            //  field umur
            'umur.required' => 'umur wajib diisi',
            'umur.integer' => 'umur wajib berbentuk angka',
            'umur.min' => 'umur wajib minimal 10 tahun',
            'umur.max' => 'umur wajib maksimal 60 tahun',
        ]);

        return $request;
    }
}
