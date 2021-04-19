<?php

namespace Database\Factories;

use App\Models\Brewery;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreweryFactory extends Factory
{

    protected $model = Brewery::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => [
                'country' => $this->faker->country,
                'city' => $this->faker->city,
                'number' => rand(10, 1200),
            ],
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'filepath' => $this->faker->filePath(),
            'descript' => $this->faker->text(200)
        ];
    }
}
