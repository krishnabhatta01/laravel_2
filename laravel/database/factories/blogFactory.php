<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class blogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(10),
            'category' => 'programming',
            
        ];
    }
}
