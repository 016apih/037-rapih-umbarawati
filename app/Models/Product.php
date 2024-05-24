<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'category_id'
    ];

    static function getList(){
        $products = DB::table("products")
            ->join("categories", "categories.id", "=", "products.category_id")
            ->get([
                "products.id",
                'products.name',
                'categories.name as categoy'
            ]);

        return $products;
    }
}
