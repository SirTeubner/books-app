<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Book 1',
            'isbn' => '9-7234-234-234',
            'pages' => 312
        ]);

        Book::create([
            'title' => 'Book 2',
            'isbn' => '8-7234-234-234',
            'pages' => 400
        ]);
    }
}
