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
                'name' => 'Inicio',
                'route_name' => 'home',
                'icon' => 'mdi-home',
                'description' => 'Access the home page of the application.',
            ],
            [
                'name' => 'Explorar libros',
                'route_name' => 'explore',
                'icon' => 'mdi-book-open',
                'description' => 'Browse and discover new books available in the library.',
            ],
            [
                'name' => 'Buscar libros',
                'route_name' => 'search',
                'icon' => 'mdi-magnify',
                'description' => 'Search for specific books using various filters and criteria.',
            ],
            [
                'name' => 'Perfil',
                'route_name' => 'profile',
                'icon' => 'mdi-account',
                'description' => 'View and manage your user profile, including personal information and preferences.',
            ],
            [
                'name' => 'Publicar libro',
                'route_name' => 'publish',
                'icon' => 'mdi-book-plus',
                'description' => 'Submit a new book to the library for publication and sharing with other users.',
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
