<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Soul',
            'Ambient',
            'Pop',
            'Rap',
            'Funk',
            'Rock',
            'Reggae / Dub',
            'Techno',
            'Electro'
        ];
        $name = fake()->randomElement($categories);
        return [
            'name' => $name
        ];
    }
}
