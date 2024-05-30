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
        $books = [
            [
                'id' => 1,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'I Have A Dream',
                'author' => 'Arif Rahman Lubis',
                'publisher' => 'Qultum Media',
                'publication_year' => '2017',
                'stock' => 1,
                'status' => 'borrowed',
                'img' => 'assets/img/book-item-4.jpg',
                // 'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 2,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Tadabbur Bacaan Shalat',
                'author' => 'Ibnu Abdil Bari',
                'publisher' => 'Zaduna',
                'publication_year' => '2022',
                'stock' => 1,
                'status' => 'available',
                'img' => 'assets/img/book-item-5.jpg',
                // 'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 3,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Sifat Shalat Nabi SAW',
                'author' => 'Syaikh Muhammad Nashiruddin al-Abani',
                'publisher' => 'Darul Haq',
                'publication_year' => '2016',
                'stock' => 1,
                'status' => 'available',
                'img' => 'assets/img/book-item-3.jpg',
                // 'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 4,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Seni Merayu Tuhan',
                'author' => "Husein Ja far Al - Hadar",
                'publisher' => 'Mizan',
                'publication_year' => '2022',
                'stock' => 1,
                'status' => 'available',
                'img' => 'assets/img/book-item-1.jpg',
                // 'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 5,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Tuhan Ada Di Hatimu',
                'author' => "Husein Ja far Al - Hadar",
                'publisher' => 'Noura Books',
                'publication_year' => '2022',
                'stock' => 1,
                'status' => 'available',
                'img' => 'assets/img/book-item-2.jpg',
                // 'created_at' => '2024-05-15 00:00:00',
            ]
        ];

        Book::insert($books);
    }
}
