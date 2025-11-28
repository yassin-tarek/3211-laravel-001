<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $randNum = rand(1,1000);
        return [
            'post_title' => fake()->sentence(6),
            'post_body' => fake()->paragraph(3),
            'thumbnail' => "https://picsum.photos/id/$randNum/200/200",
            'user_id' => fake()->randomNumber(9),
            'post_status_id' => fake()->randomNumber(9),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
