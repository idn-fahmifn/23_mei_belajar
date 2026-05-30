<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    // jika ingin menggunakan factory, aktifkan dulu factory :
    use HasFactory;

    // Jika ada nama yang sesuai contoh Model : Car, table : cars

    // jika kita terlanjur memberi nama singular pada table
    // protected $table = 'car';

    // ada apa saja column di table car?
    protected $fillable = [
        'brand', 'type', 'color', 'stock', 'desc'
    ];


}
