<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Car;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = ['Toyota', 'Daihatsu', 'BYD', 'Suzuki'];
        $type = ['Fortuner', 'Xenia', 'Seal', 'Ertiga'];

        return [
            'brand' => fake()->randomElement($brand),
            'type' => fake()->randomElement($type),
            'color' => fake()->colorName(),
            'desc' => fake()->realText(),
            'stock' => random_int(0, 200),
        ];
    }
}
