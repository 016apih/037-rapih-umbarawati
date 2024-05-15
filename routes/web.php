<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $roles = [
        [
            'id' => 1,
            'name' => 'admin',
            'created_at' => '15/05/2024',
        ],[
            'id' => 2,
            'name' => 'member',
            'created_at' => '15/05/2024',
        ],
    ];

    $categories = [
        [
            'id' => 1,
            'name' => 'Self Dev',
            'created_at' =>  '15/05/2024',
        ], [
            'id' => 2,
            'name' => 'Agama',
            'created_at' =>  '15/05/2024',
        ], [
            'id' => 3,
            'name' => 'Novel',
            'created_at' =>  '15/05/2024',
        ]
    ] ;

    $users = [
        [
            'id' => 1,
            'role_id' => 1,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'address' => "alamat",
            'no_hp' => '08963456789',
            'created_at' => '15/05/2024',
        ],[
            'id' => 2,
            'role_id' => 2,
            'username' => 'member',
            'email' => 'member@gmail.com',
            'password' => 'password',
            'address' => "alamat",
            'no_hp' => '08963456789',
            'created_at' => '15/05/2024',
        ]
    ];

    $books = [
        [
            'id' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'category_name' => 'Self Dev',
            'title' => 'I Have A Dream',
            'author' => 'Arif Rahman Lubis',
            'publisher' => 'Qultum Media',
            'publication_year' => '2017',
            'stock' => 1,
            'status' => 'availabe',
            'img' => 'book-item-4',
            'created_at' => '15/05/2024',
        ], [
            'id' => 2,
            'user_id' => 1,
            'category_id' => 2,
            'category_name' => 'Agama',
            'title' => 'Tadabbur Bacaan Shalat',
            'author' => 'Ibnu Abdil Bari',
            'publisher' => 'Zaduna',
            'publication_year' => '2022',
            'stock' => 1,
            'status' => 'availabe',
            'img' => 'book-item-5',
            'created_at' => '15/05/2024',
        ], [
            'id' => 3,
            'user_id' => 1,
            'category_id' => 2,
            'category_name' => 'Agama',
            'title' => 'Sifat Shalat Nabi SAW',
            'author' => 'Syaikh Muhammad Nashiruddin al-Abani',
            'publisher' => 'Darul Haq',
            'publication_year' => '2016',
            'stock' => 1,
            'status' => 'availabe',
            'img' => 'book-item-3',
            'created_at' => '15/05/2024',
        ], [
            'id' => 4,
            'user_id' => 1,
            'category_id' => 2,
            'category_name' => 'Agama',
            'title' => 'Seni Merayu Tuhan',
            'author' => "Husein Ja far Al - Hadar",
            'publisher' => 'Mizan',
            'publication_year' => '2022',
            'stock' => 1,
            'status' => 'availabe',
            'img' => 'book-item-1',
            'created_at' => '15/05/2024',
        ], [
            'id' => 5,
            'user_id' => 1,
            'category_id' => 2,
            'category_name' => 'Agama',
            'title' => 'Tuhan Ada Di Hatimu',
            'author' => "Husein Ja far Al - Hadar",
            'publisher' => 'Noura Books',
            'publication_year' => '2022',
            'stock' => 1,
            'status' => 'availabe',
            'img' => 'book-item-2',
            'created_at' => '15/05/2024',
        ]
    ];

    $loans = [
        [
            'id' => 1,
            'book_id' => 1,
            'user_id' => 2,
            'loan_date' => "15/05/2024",
            'status' => "active",
            'return_date' => "20/05/2024",
            'loan_time' => '5',
            'created_at' => "15/05/2024"
        ]
    ];

    return view('homepage', compact('books', 'categories', ));
});
