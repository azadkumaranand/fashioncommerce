<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private $cateogry = ['clothes', 'electronics'];
    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'price'=>fake()->randomFloat(2, 500, 10000),
            'description'=>fake()->text(),
            'images'=>fake()->imageUrl(640, 480, 'sports', true),
            'category'=>$this->cateogry[fake()->numberBetween(0,1)]
        ];
    }
}
