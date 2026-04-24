<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeders = [
            ['name' => 'Arte'],
            ['name' => 'Ciencia'],
            ['name' => 'Cine'],
            ['name' => 'Cocina'],
            ['name' => 'Deportes'],
            ['name' => 'Ensayo'],
            ['name' => 'Ficción'],
            ['name' => 'Historia'],
            ['name' => 'Hogar'],
            ['name' => 'Misterio'],
            ['name' => 'Música'],
            ['name' => 'Novela'],
            ['name' => 'Poesía'],
            ['name' => 'Tecnología'],
            ['name' => 'Viajes'],
        ];

        foreach ($seeders as $category) {
            \App\Models\Category::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}
