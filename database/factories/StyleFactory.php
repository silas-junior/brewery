<?php

namespace Database\Factories;

use App\Models\Style;
use Illuminate\Database\Eloquent\Factories\Factory;

class StyleFactory extends Factory
{

    protected $model = Style::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'category_id' => rand(1, 8),
        ];
    }
}
