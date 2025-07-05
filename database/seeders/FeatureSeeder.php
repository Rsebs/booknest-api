<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeders = [
            [
                'name' => 'Home Page',
                'path_name' => 'home',
                'icon' => 'mdi-home',
                'description' => 'Access the home page of the application.',
            ],
            [
                'name' => 'About Page',
                'path_name' => 'about',
                'icon' => 'mdi-information',
                'description' => 'Learn more about the application and its features.',
            ],
        ];

        foreach ($seeders as $feature) {
            \App\Models\Feature::updateOrCreate(
                ['name' => $feature['name']],
                $feature
            );
        }
    }
}
