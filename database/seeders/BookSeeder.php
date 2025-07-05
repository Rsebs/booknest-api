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
                'cover_url' => 'https://covers.openlibrary.org/b/id/7222246-L.jpg',
                'file_url' => 'https://www.planetebook.com/free-ebooks/the-great-gatsby.pdf',
                'price' => 9.99,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel about totalitarianism and surveillance.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/11153236-L.jpg',
                'file_url' => 'https://www.planetebook.com/free-ebooks/1984.pdf',
                'price' => 8.99,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'description' => 'A classic romance novel of manners and misunderstandings.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8091016-L.jpg',
                'file_url' => 'https://www.planetebook.com/free-ebooks/pride-and-prejudice.pdf',
                'price' => 7.99,
            ],
            [
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel about science, creation, and consequences.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8226196-L.jpg',
                'file_url' => 'https://www.planetebook.com/free-ebooks/frankenstein.pdf',
                'price' => 6.99,
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
