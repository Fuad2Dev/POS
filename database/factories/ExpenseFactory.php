<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ExpenseType;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $expense_type_id = $this->faker->randomElement(ExpenseType::all()->pluck('id'));
        $payment_method_id = $this->faker->randomElement(PaymentMethod::all()->pluck('id'));
        $user_id = $this->faker->randomElement(User::all()->pluck('id'));

        return [
            'expense_type_id' => $expense_type_id,
            'amount' => ($expense_type_id == 1) ? $this->faker->randomFloat(null, 10, 100) : $this->faker->randomFloat(null, 500, 1000),
            'payment_method_id' => $payment_method_id,
            'user_id' => $user_id
        ];
    }
}
