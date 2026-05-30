<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // cara membuat data dummy pada model car

        // Car::create([
        //     'brand' => 'Toyota',
        //     'type' => 'All New Avanza',
        //     'color' => 'black metalic',
        //     'stock' => 2,
        //     'desc' => 'Mobil keluarga super irit'
        // ]);

        // untuk memanggil factory
        Car::factory()->count('100')->create();

    }
}
