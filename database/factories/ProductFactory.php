<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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

    protected $model = Product::class;
    public function definition()
    {
        return [
            "name" => fake()->word(),
            "description" => fake()->sentence(),
            "price" => fake()->numerify(),
            "year" => fake()->year(),
            "category" => fake()->word(),
            "stock" => fake()->numerify()
        ];
    }
}
