<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeders = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel set in the Roaring Twenties, exploring themes of decadence and excess.',
                'cover_url' => 'https://example.com/great-gatsby-cover.jpg',
                'file_url' => 'https://example.com/great-gatsby.pdf',
                'price' => 9.99,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel about totalitarianism and surveillance.',
                'cover_url' => 'https://example.com/1984-cover.jpg',
                'file_url' => 'https://example.com/1984.pdf',
                'price' => 8.99,
            ],
        ];
        foreach ($seeders as $book) {
            \App\Models\Book::updateOrCreate(
                ['title' => $book['title']],
                $book
            );
        }
    }
}
