<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Legalperson>
 */
class LegalpersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => fake()->randomElement(Account::all())['id'],
            'nit' => fake()->fake()->randomNumber(5, true),
            'company_name' => fake()->company(),
            'commercial_registration' => fake()->randomNumber(6, true)
        ];
    }
}
