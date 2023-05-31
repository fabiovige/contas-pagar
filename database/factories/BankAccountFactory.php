<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'agency' => fake()->numberBetween(1,9999),
            'account' => fake()->numberBetween(123456, 987654),
            'balance' => fake()->numberBetween(10,9999),
        ];
    }
}
