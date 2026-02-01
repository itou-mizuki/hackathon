<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // ランダムな名前
            'email' => $this->faker->unique()->safeEmail(), // ランダムなメール
            'password' => Hash::make('password'), // パスワードは全員「password」
        ];
    }
}