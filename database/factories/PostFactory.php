<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(mt_rand(3, 6));
        $paragraph = fake()->paragraphs(mt_rand(5, 10));
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'excerpt' => fake()->paragraph(mt_rand(5, 10)),
            'body' => collect($paragraph)->map(fn ($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3),
        ];
    }
}
