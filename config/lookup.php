<?php

return [
    'resources' => [
        'category' => [
            'model' => App\Models\Category::class,
            'label' => 'name',
        ],
        'books' => [
            'model' => App\Models\Book::class,
            'label' => 'title',
        ],
    ],
];
