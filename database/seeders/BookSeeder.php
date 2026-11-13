<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter és a bölcsek köve',
            'author' => 'J. K. Rowling',
            'category' => 'Fantasy',
            'published_year' => 1997,
            'available' => true
        ]);

        Book::create([
            'title' => 'A Gyűrűk Ura',
            'author' => 'J. R. R. Tolkien',
            'category' => 'Fantasy',
            'published_year' => 1954,
            'available' => true
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'category' => 'Sci-fi',
            'published_year' => 1949,
            'available' => false
        ]);

        Book::create([
            'title' => 'A kis herceg',
            'author' => 'Antoine de Saint-Exupéry',
            'category' => 'Ifjúsági',
            'published_year' => 1943,
            'available' => true
        ]);
    }
}