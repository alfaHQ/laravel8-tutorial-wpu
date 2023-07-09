<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =  $this->faker->sentence(mt_rand(2, 5));
        $body = $this->faker->paragraphs(mt_rand(10, 15));

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            // 'excerpt' => Str::limit($body, 100, '...'),
            'excerpt' => collect($body)->map(fn($p) => Str::limit($p, 10, '...'))->implode(''),
            // 'body' => $body,
            // 'body' => '<p>' . implode("</p><p>", $body) . '</p>',
            'body' => collect($body)->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
