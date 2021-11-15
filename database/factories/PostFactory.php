<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = ucfirst($this->faker->sentence());
        $slug = Str::slug($title);
        return [
            'title' => $title
            // 'slug' => $slug
        ];
    }
}
