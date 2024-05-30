<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $fillables = ['name'];

    public static function getCount(){
        return DB::select('SELECT COUNT(*) as total FROM categories')[0]->total;
    }

    public static function getList(){

        return DB::table("categories")->get();
    }
}
