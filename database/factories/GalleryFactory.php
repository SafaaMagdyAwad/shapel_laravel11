<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=['g1.jpg','g2.jpg','g3.jpg','g4.jpg','g5.jpg','g6.jpg'];
        return [
            'image'=>fake()->randomElement($images),
            'image_title'=>fake()->colorName(),
            'published'=>fake()->boolean(),
        ];
    }
}
