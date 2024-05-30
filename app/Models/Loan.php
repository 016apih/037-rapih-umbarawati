<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Loan extends Model
{
    use HasFactory;

    protected $fillables = [
        'book_id',
        'category_id',
        'user_id',
        'loan_date',
        'status',
        'return_date',
        'loan_time',
    ];

    public static function getCount(){
        return DB::select('SELECT COUNT(*) as total FROM loans')[0]->total;
    }

    public static function getList(){
        return DB::table("loans")
            ->join("books", "books.id", "=", "loans.book_id")
            ->join("users", "users.id", "=", "loans.user_id")
            ->select('loans.*', 'users.username as username', 'books.title as title', )
            ->get();
    }

    public static function getById($id){
        return DB::table("loans")
            ->join("books", "books.id", "=", "loans.book_id")
            ->join("categories", "categories.id", "=", "books.category_id")
            ->join("users", "users.id", "=", "loans.user_id")
            ->select('loans.*', 'users.username as username', 'books.title as title', 'categories.name as category_name')
            ->where('loans.id', $id)
            ->first();
    }

    public static function getByUserId($userId){
        return DB::table("loans")
            ->join("books", "books.id", "=", "loans.book_id")
            ->join("categories", "categories.id", "=", "books.category_id")
            ->join("users", "users.id", "=", "loans.user_id")
            ->select('loans.*', 'users.username as username', 'books.title as title', 'categories.name as category_name')
            ->where('loans.user_id', $userId)
            ->get();
    }

    public static function create($payload){
        $now = Carbon::now();
        $return_date = Carbon::parse($payload['return_date']);
        $loan_date = ceil($now->diffInDays($return_date));

        Book::updateStatus($payload['book_id'], 'borrowed');

        return DB::table('loans')->insert([
            'book_id' => $payload['book_id'],
            'user_id' => $payload['user_id'],
            'loan_date' => $now,
            'status' => $payload['status'],
            'return_date' => $return_date,
            'loan_time' => (int) $loan_date,
            'created_at' => $now,
        ]);
    }

    public static function update_($payload, $id){
        $now = Carbon::now();
        $return_date = Carbon::parse($payload['return_date']);
        $loan_date = ceil($now->diffInDays($return_date));

        if($payload['status'] == 'return'){
            Book::updateStatus($payload['book_id'], 'available');
        }

        return DB::table('loans')
            ->where('loans.id', $id)
            ->update([
                'book_id' => $payload['book_id'],
                'user_id' => $payload['user_id'],
                'loan_date' => $now,
                'status' => $payload['status'],
                'return_date' => $return_date,
                'loan_time' => (int) $loan_date,
                'created_at' => $now,
            ]);
    }

    public static function delete_($id){
        return DB::table('loans')
            ->where('loans.id', $id)
            ->delete();
    }
}
