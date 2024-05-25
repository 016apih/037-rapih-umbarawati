<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

    public static function getById($id){
        return DB::table('books')
            ->join("categories", "categories.id", "=", "books.category_id")
            ->join("users", "users.id", "=", "books.user_id")
            ->select('books.*',  'categories.id as category_id', 'categories.name as category_name', 'users.username as username')
            ->where('books.id', $id)
            ->first();
    }

    public static function create($payload){
        $now = Carbon::now();

        return DB::table('books')->insert([
            'user_id' => session()->get('userId'),
            'category_id' => $payload['category_id'],
            'title' => $payload['title'],
            'author' => $payload['author'],
            'publisher' => $payload['publisher'],
            'publication_year' => $payload['publication_year'],
            'stock' => $payload['stock'] ?? 1,
            'status' => $payload['status'] ?? "availabe",
            'img' => $payload['img'],
            'created_at' => $now,
        ]);
    }

    public static function update_($payload, $id){
        $now = Carbon::now();

        return DB::table('books')
            ->where('books.id', $id)
            ->update([
                'category_id' => $payload['category_id'],
                'title' => $payload['title'],
                'author' => $payload['author'],
                'publisher' => $payload['publisher'],
                'publication_year' => $payload['publication_year'],
                'stock' => $payload['stock'] ?? 1,
                'status' => $payload['status'] ?? "availabe",
                'img' => $payload['img'],
                'updated_at' => $now,
            ]);
    }

    public static function delete_($id){
        return DB::table('books')
            ->where('books.id', $id)
            ->delete();
    }
    
}
