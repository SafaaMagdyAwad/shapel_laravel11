<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $services=['Residential Decoration','Decoration','Markting','Social Media','Ecommercial Decoration','Office Decoration'];
        $images=['s1.jpg','s2.jpg','s3.jpg'];
        return [
            'title'=>fake()->unique()->randomElement($services),
            'description'=>fake()->text(1000),
            'image'=>fake()->randomElement($images),
            'isPublished'=>fake()->boolean(),
        ];
    }
}
