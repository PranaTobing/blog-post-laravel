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
        $paragraph = fake()->paragraph(mt_rand(20, 40));
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'excerpt' => substr($paragraph, 0, 100),
            'body' => $paragraph,
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3),
        ];
    }
}
