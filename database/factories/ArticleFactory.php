<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->words(rand(1, 2), true),
            'content' => fake()->paragraphs(rand(1, 4), true),
            'image' => 'https://picsum.photos/id/' . rand(1, 20) . '/1024/768',
            'is_premium' => fake()->boolean(50),
        ];
    }
}
