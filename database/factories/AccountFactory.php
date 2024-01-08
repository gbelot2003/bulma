<?php

namespace Database\Factories;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'document_number' => fake()->randomNumber(7, true),
            'name' => fake()->name,
            'account_type' => AccountType::JURIDICA,
        ];
    }

    public function natural(): Factory
    {
        return $this->states(function (array $attributes) {
            return [
                'account_type' => AccountType::NATURAL
            ];
        });
    }
}
