<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Carbon;

class BorrowSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first(); // pastikan UserSeeder sudah jalan
        $book = Book::first(); // pastikan BookSeeder sudah jalan

        if ($user && $book) {
            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'borrow_date' => Carbon::now()->subDays(3),
                'return_date' => Carbon::now()->addDays(7),
                'status' => 'borrowed',
            ]);

            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $book->id,
                'borrow_date' => Carbon::now()->subDays(10),
                'return_date' => Carbon::now()->subDays(2),
                'status' => 'returned',
            ]);
        }
    }
}
