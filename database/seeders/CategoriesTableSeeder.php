<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Menu::all() as $menu) {
            for ($i = 1; $i <= 10; $i++) {
                $menu->categories()->create([
                    'name' => 'Category ' . $i,
                    'position' => random_int(1, 10),
                ]);
            }
        }
    }
}
