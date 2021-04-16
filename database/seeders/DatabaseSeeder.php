<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
//         \App\Models\User::factory(10)->create();
         \App\Models\Brewery::factory(30)->create();
         \App\Models\Geolocation::factory(30)->create();
         \App\Models\Category::factory(30)->create();
    }
}
