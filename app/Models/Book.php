<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    protected $fillables = [
        'user_id',
        'category_id',
        'title',
        'author',
        'publisher',
        'publication_year',
        'stock',
        'status',
        'img'
    ];

    public static function getList(){
        return DB::table("books")
            ->join("categories", "categories.id", "=", "books.category_id")
            ->join("users", "users.id", "=", "books.user_id")
            ->select('books.*', 'categories.name as category_name', 'users.username as username')
            ->get();
    }

    public static function getBook($id){
        return DB::table('books')
            ->join("categories", "categories.id", "=", "books.category_id")
            ->join("users", "users.id", "=", "books.user_id")
            ->select('books.*', 'categories.name as category_name', 'users.username as username')
            ->where('books.id', $id)
            ->first();
    }

    
}
