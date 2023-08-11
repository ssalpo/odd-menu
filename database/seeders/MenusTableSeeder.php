<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Place::all() as $place) {
            for ($i = 1; $i <= 10; $i++) {
                $place->menus()->create([
                    'name' => 'Menu ' . $i,
                    'position' => random_int(1, 10),
                ]);
            }
        }
    }
}
