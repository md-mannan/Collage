<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->email(),
            'age' => fake()->numberBetween(18, 30),
            'gender' => fake()->randomElement(['Female', 'Male']),
            'country' => fake()->country(),
            'city' => fake()->state(),
            'address' => fake()->address('en_IN'),
            'phone' => fake()->phoneNumber()
        ];
    }
}
