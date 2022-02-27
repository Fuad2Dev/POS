<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $cat_ids = Category::all()->pluck('id');
        return [
            // 'name' => $this->faker->name(),
            // 'category_id' => $this->faker->randomElement($cat_ids),
            // 'price' => $this->faker->randomFloat(null, 500,1000),
            // 'stock' => $this->faker->numberBetween(0,10),
            // 'stock_defective' => $this->faker->numberBetween(0,1)
        ];
    }
}
