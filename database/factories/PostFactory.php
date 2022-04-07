<?php

namespace Database\Factories;

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
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(500, 1000),
            'image' => mt_rand(1, 3) . '.svg',
            'published_at' => $this->faker->dateTimeBetween('2021-01-01', '2021-12-31'),
        ];
    }
}
