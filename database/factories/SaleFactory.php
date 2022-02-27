<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = User::all()->pluck('id');
        $client_ids = Client::all()->pluck('id');


        return [
            'user_id' => $this->faker->randomElement($user_ids),
            'client_id' => $this->faker->randomElement($client_ids),
            'total_amount' => $this->faker->randomFloat(null,100,5000)
        ];
    }
}
