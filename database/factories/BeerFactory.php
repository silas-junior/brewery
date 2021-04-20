<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{

    protected $model = Beer::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(40),
            'filepath' => $this->faker->filePath(),
            'brewery_id' => rand(1, 30),
            'category_id' => rand(1, 8),
            'style_id' => rand(1, 30),
        ];
    }
}
