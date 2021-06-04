<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $categories = [
            [
//                'id' => 1,
                'name' => 'Brahma',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 2,
                'name' => 'Bavária',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 3,
                'name' => 'Crystal',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 4,
                'name' => 'Kaiser',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 5,
                'name' => 'Itaipava',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 6,
                'name' => 'Schin',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 7,
                'name' => 'Antarctica',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
//                'id' => 8,
                'name' => 'Skol',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
        ];

//         \App\Models\User::factory(10)->create();
         \App\Models\Brewery::factory(30)->create();
         \App\Models\Geolocation::factory(30)->create();
        foreach ($categories as $category) {
            \App\Models\Category::insert($category);
        }
         \App\Models\Style::factory(30)->create();
         \App\Models\Beer::factory(30)->create();
    }
}
