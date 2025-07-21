<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Hanes',
            'publisher' => 'Informatika',
            'year' => 2024,
            'isbn' => '9786021234567',
            'category_id' => 1, // Pastikan CategorySeeder sudah menyiapkan ID 1
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Pengantar Basis Data',
            'author' => 'Hani Dewi Ariessanti',
            'publisher' => 'Elex Media',
            'year' => 2023,
            'isbn' => '9786027654321',
            'category_id' => 2, // Pastikan CategorySeeder sudah menyiapkan ID 2
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Pemrograman Web Lanjut',
            'author' => 'Sinta Ayu Permata',
            'publisher' => 'Gramedia',
            'year' => 2022,
            'isbn' => '9786029876543',
            'category_id' => 3,
            'stock' => 8,
        ]);
    }
}
