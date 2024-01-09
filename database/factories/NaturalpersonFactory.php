<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Naturalperson>
 */
class NaturalpersonFactory extends Factory
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
            'firstName' => fake()->firstName,
            'lastName' => fake()->lastName,
            'ID_number' => fake()->randomNumber(13, true)
        ];
    }
}
