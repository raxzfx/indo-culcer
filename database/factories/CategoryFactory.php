<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Seni', 'Tradisi', 'Cerita Rakyat']),
            'description' => $this->faker->sentence,
        ];
    }
}
