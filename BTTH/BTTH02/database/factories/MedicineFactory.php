<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->string(255),
        'brand'=>fake()->string(100),
        'dogsage'=>fake()->string(50),
        'form'=>fake()->string(50),
        'price'=>fake()->decimal(10,2),
        'stock'=>fake()->int(),
        ];
    }
}
