<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function getList(){

        return DB::table("users")
            ->join("roles", "roles.id", "=", "users.role_id")
            ->select('users.*', 'roles.id as role_id', 'roles.name as role_name')
            ->get();
    }

    public static function getById($id){
        return DB::table('users')
            ->join("roles", "roles.id", "=", "users.role_id")
            ->select('users.*', 'roles.id as role_id', 'roles.name as role_name')
            ->where('users.id', $id)
            ->first();
    }

    public static function getByEmail($email){
        return DB::table('users')
            ->join("roles", "roles.id", "=", "users.role_id")
            ->select('users.*', 'roles.id as role_id', 'roles.name as role_name')
            ->where('users.email', $email)
            ->first();
    }

    public static function create($payload){
        return DB::table('users')->insert([
            'role_id' => 2,
            'username' => $payload['username'],
            'email' => $payload['email'],
            'password' => Hash::make($payload['password']),
            'address' => $payload['address'],
            'no_hp' => $payload['no_hp'],
        ]);
    }
}
