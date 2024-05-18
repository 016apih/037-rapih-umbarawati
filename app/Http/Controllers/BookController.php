<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books;

    public function __construct(){
        $this->books = [
            [
                'id' => 1,
                'user_id' => 1,
                'username' => 'Admin',
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
                'username' => 'Admin',
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
                'username' => 'Admin',
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
                'username' => 'Admin',
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
                'username' => 'Admin',
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
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->books;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $result = null;

        foreach($this->books as $book){
            if($book['id'] == $id){
                $result = $book;
            }
        }
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
