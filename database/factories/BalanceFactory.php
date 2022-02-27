<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = $this->faker->randomElement(User::all()->pluck('id'));
        $sale_id = $this->faker->randomElement(Sale::all()->pluck('id'));
        $client_id = Sale::find($sale_id)->client_id;
       $amount = $this->faker->randomFloat(null, -100, 500);

        // amount
        // ref
        return [
            'user_id' => $user_id,
            'client_id' => $client_id,
            'sale_id' => $sale_id,
            'amount' => $amount
        ];
    }
}
