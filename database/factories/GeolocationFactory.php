<?php

namespace Database\Factories;

use App\Models\Geolocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GeolocationFactory extends Factory
{

    protected $model = Geolocation::class;


    public function definition()
    {
        return [
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'accuracy' => Str::random(3),
            'brewery_id' => rand(0, 29),
        ];
    }
}
