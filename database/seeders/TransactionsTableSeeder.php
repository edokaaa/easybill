<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Transaction::truncate();

        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) {
            Transaction::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 3),
                'description' => $faker->sentence,
                'amount' => $faker->numberBetween($min = 500, $max = 10000),
                'fees' => $faker->numberBetween($min = 20, $max = 100),
                'status' => $faker->text,
                'transaction_type' => random_int(0, 1) ? 'credit' : 'debit',
                'payment_method' => 'card'
            ]);
        }
    }
}
