<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(50),
            'cate_id' => fake()->numerify(),
            'material' => fake()->text(50),
            'price' => fake()->numerify(),
            'rate' => fake()->numerify(),
            'description' => fake()->text(100),
        ];
    }
}
