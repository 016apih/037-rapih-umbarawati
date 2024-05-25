<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Role extends Model
{
    use HasFactory;

    protected $fillables = ['name'];

    public static function getList(){

        return DB::table("roles")->get();
    }
    
    public static function getById($id){

        return DB::table('roles')
            ->where('roles.id', $id)
            ->first();
    }

    public static function create($payload){
        $now = Carbon::now();

        return DB::table('roles')->insert([
            'name' => $payload['name'],
            'created_at' => $now,
        ]);
    }

    public static function update_($payload, $id){
        $now = Carbon::now();

        return DB::table('roles')
            ->where('roles.id', $id)
            ->update([
                'name' => $payload['name'],
                'updated_at' => $now,
            ]);
    }

    public static function delete_($id){
        return DB::table('roles')
            ->where('roles.id', $id)
            ->delete();
    }
}
