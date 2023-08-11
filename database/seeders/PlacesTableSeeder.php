<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Place::create([
                'name' => 'Place ' . $i,
                'slug' => 'place-' . $i,
                'user_id' => random_int(1, 10)
            ]);
        }
    }
}
