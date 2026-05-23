<?php

use Illuminate\Support\Facades\Route;

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
    return view('belajar');
});

// membuat sebuah route yang memiliki parameter
Route::get('/study/{parameter}', function() {
    return 'Hallo saya sedang belajar';
});
