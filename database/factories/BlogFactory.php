<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titleList=['Designing office','Designing a villa','Decorating a house'];
        $images=['b1.jpg','b2.jpg','b3.jpg'];
        return [
            'title'=>fake()->randomElement($titleList),
            'description'=>fake()->text(2000),
            'image'=>fake()->randomElement($images),
            'isPublished'=>fake()->boolean(),
            'like'=>fake()->numberBetween(1,100),
        ];
    }
}
