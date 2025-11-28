<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poststatus>
 */
class PoststatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'post_status_name' => fake()->randomElement(['published', 'pending','deleted']),
        'created_at' => fake()->dateTime(),
        'updated_at' => fake()->dateTime(),
        'deleted_at' => fake()->dateTime(),
        ];
    }
}
