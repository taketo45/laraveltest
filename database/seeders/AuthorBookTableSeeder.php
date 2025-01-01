<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();
        $books = Book::all();

        foreach($books as $book){
            $authorIds = $authors->random(2)->pluck('id')->all();

            $book->authors()->attach($authorIds);
        }
        
    }
}
