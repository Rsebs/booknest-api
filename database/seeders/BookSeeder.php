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
                'price' => 9.99,
                'categories' => [7, 12],
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel about totalitarianism and surveillance.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/11153236-L.jpg',
                'price' => 8.99,
                'categories' => [7, 8],
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'description' => 'A handbook of agile software craftsmanship.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/9611996-L.jpg',
                'price' => 29.99,
                'categories' => [14],
            ],
            [
                'title' => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'description' => 'A brief history of humankind.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8370226-L.jpg',
                'price' => 19.99,
                'categories' => [8, 6],
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'description' => 'A fantasy novel about the journey of Bilbo Baggins.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/6979861-L.jpg',
                'price' => 12.99,
                'categories' => [7, 12],
            ],
            [
                'title' => 'The Da Vinci Code',
                'author' => 'Dan Brown',
                'description' => 'A mystery thriller novel.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/240726-L.jpg',
                'price' => 10.99,
                'categories' => [10, 7],
            ],
            [
                'title' => 'Mastering Pasta',
                'author' => 'Marc Vetri',
                'description' => 'A guide to making authentic Italian pasta.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8231856-L.jpg',
                'price' => 15.99,
                'categories' => [4],
            ],
            [
                'title' => 'The Art of War',
                'author' => 'Sun Tzu',
                'description' => 'Ancient Chinese military treatise.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8231996-L.jpg',
                'price' => 6.99,
                'categories' => [6, 8],
            ],
            [
                'title' => 'Steve Jobs',
                'author' => 'Walter Isaacson',
                'description' => 'Biography of Apple co-founder Steve Jobs.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/6979862-L.jpg',
                'price' => 18.99,
                'categories' => [8, 14],
            ],
            [
                'title' => 'The Lean Startup',
                'author' => 'Eric Ries',
                'description' => 'A methodology for developing businesses and products.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/6979863-L.jpg',
                'price' => 17.99,
                'categories' => [14, 6],
            ],
            [
                'title' => 'Into the Wild',
                'author' => 'Jon Krakauer',
                'description' => 'A true story of adventure and survival.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8232001-L.jpg',
                'price' => 11.99,
                'categories' => [15],
            ],
            [
                'title' => 'The Shining',
                'author' => 'Stephen King',
                'description' => 'A horror novel set in an isolated hotel.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8232002-L.jpg',
                'price' => 9.49,
                'categories' => [10, 7],
            ],
            [
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'description' => 'Epic science fiction novel set on the desert planet Arrakis.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8101356-L.jpg',
                'price' => 13.99,
                'categories' => [7, 2],
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'description' => 'A story about teenage rebellion and identity.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8231852-L.jpg',
                'price' => 9.99,
                'categories' => [12],
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'description' => 'A futuristic society driven by technology and control.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8776041-L.jpg',
                'price' => 8.49,
                'categories' => [7, 8],
            ],
            [
                'title' => 'The Silent Patient',
                'author' => 'Alex Michaelides',
                'description' => 'A psychological thriller about a woman who stops speaking.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/10594754-L.jpg',
                'price' => 11.49,
                'categories' => [10],
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'description' => 'A guide to building good habits and breaking bad ones.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/10521270-L.jpg',
                'price' => 16.99,
                'categories' => [6],
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'description' => 'A philosophical novel about following your dreams.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8279256-L.jpg',
                'price' => 7.49,
                'categories' => [7, 12],
            ],
            [
                'title' => 'Gone Girl',
                'author' => 'Gillian Flynn',
                'description' => 'A thriller about a marriage gone terribly wrong.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8228691-L.jpg',
                'price' => 10.99,
                'categories' => [10],
            ],
            [
                'title' => 'The Odyssey',
                'author' => 'Homer',
                'description' => 'Ancient Greek epic poem of Odysseus journey.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8231999-L.jpg',
                'price' => 6.49,
                'categories' => [13, 8],
            ],
            [
                'title' => 'A Brief History of Time',
                'author' => 'Stephen Hawking',
                'description' => 'An overview of cosmology and the universe.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/240726-L.jpg',
                'price' => 14.99,
                'categories' => [2],
            ],
            [
                'title' => 'The Road',
                'author' => 'Cormac McCarthy',
                'description' => 'A post-apocalyptic story of survival.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8232003-L.jpg',
                'price' => 9.29,
                'categories' => [7],
            ],
            [
                'title' => 'Kitchen Confidential',
                'author' => 'Anthony Bourdain',
                'description' => 'Inside look into the culinary world.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8232004-L.jpg',
                'price' => 12.49,
                'categories' => [4],
            ],
            [
                'title' => 'On the Road',
                'author' => 'Jack Kerouac',
                'description' => 'A novel about travel and freedom.',
                'cover_url' => 'https://covers.openlibrary.org/b/id/8232005-L.jpg',
                'price' => 8.79,
                'categories' => [15, 12],
            ],
        ];

        foreach ($seeders as $data) {
            $categories = $data['categories'] ?? [];
            unset($data['categories']);

            $book = \App\Models\Book::updateOrCreate(
                [
                    'title' => $data['title'],
                    'author' => $data['author'],
                ],
                $data
            );

            $book->categories()->sync($categories);
        }
    }
}
