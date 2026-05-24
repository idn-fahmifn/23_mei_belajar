<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{BelajarController, PhotoController};

Route::get('/', function () {
    return view('welcome');
});

// get => menampilkan
// post => mengirimkan data
// put / patch => edit data
// delete => menghapus data

Route::get('/belajar', function () {
    // saya harus ngapain kalau dipanggil /belajar?
    return 'Hallo saya sedang belajar Laravel';
})->name('route-belajar');


Route::get('/study', function () {
    return view('belajar'); //menampilkan sebuah halaman bernama belajar.blade.php
})->middleware('nama');


// membuat sebuah route yang memiliki parameter
Route::get('/study/{parameter}', function() {
    return 'Hallo saya sedang belajar';
});

Route::post('/kirim', [BelajarController::class, 'proses'])->name('kirim-data');
Route::get('/barang', [BelajarController::class, 'barang'])->name('barang');
Route::get('/barang/{param}', [BelajarController::class, 'detail'])->name('barang-detail');

// resource tidak perlu diberikan name pada routenya.
Route::resource('/photos', PhotoController::class);


