<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Fuad',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // password
            'remember_token' => Str::random(10),
            'isAdmin' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fuad',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // password
            'remember_token' => Str::random(10),
            'isAdmin' => false,
        ]);

        // \App\Models\Client::factory(5)->create();

        // \App\Models\Category::factory()->create([
        //     'name' => 'skirts'
        // ]);
        // \App\Models\Category::factory()->create([
        //     'name' => 'shoes'
        // ]);
        // \App\Models\Category::factory()->create([
        //     'name' => 'long dresses'
        // ]);
        // \App\Models\Category::factory()->create([
        //     'name' => 'trousers'
        // ]);
        // \App\Models\Category::factory()->create([
        //     'name' => 'hats'
        // ]);
        // \App\Models\Category::factory()->create([
        //     'name' => 'tops'
        // ]);

        // \App\Models\Product::factory(20)->create();

        // \App\Models\Sale::factory(15)->create();

        \App\Models\PaymentMethod::factory()->create([
            'name' => 'cash'
        ]);

        // \App\Models\PaymentMethod::factory()->create([
        //     'name' => 'mobile money',
        //     'description' => '0243833810'
        // ]);

        // \App\Models\ExpenseType::factory()->create([
        //     'type' => 'prepaid'
        // ]);

        // \App\Models\ExpenseType::factory()->create([
        //     'type' => 'salary',
        // ]);

        // \App\Models\ExpenseType::factory()->create([
        //     'type' => 'new goods',
        // ]);

        // \App\Models\Expense::factory(15)->create();

        // \App\Models\Balance::factory(10)->create();

        // \App\Models\Provider::factory(10)->create();

        // \App\Models\SoldProduct::factory()->create([
        //     'sale_id' => 1,
        //     'product_id' => 1,
        //     'qty' => 1,
        //     'price' => 180,
        //     'total_amount' => 180
        // ]);

    }
}
