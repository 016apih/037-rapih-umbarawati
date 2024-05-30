<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

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

    public static function getCount(){
        return DB::select('SELECT COUNT(*) as total FROM users')[0]->total;
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
        $now = Carbon::now();
        $password = $payload['password'] ?? "password";
        $role_id = $payload['role_id'] ?? 2;

        return DB::table('users')->insert([
            'role_id' => $role_id,
            'username' => $payload['username'],
            'email' => $payload['email'],
            'password' => Hash::make($password),
            'address' => $payload['address'],
            'no_hp' => $payload['no_hp'],
            'created_at' => $now,
        ]);
    }

    public static function update_($payload, $id){
        $now = Carbon::now();
        $password = $payload['password'] ?? "password";

        return DB::table('users')
            ->where('users.id', $id)
            ->update([
                'username' => $payload['username'],
                'email' => $payload['email'],
                'password' => Hash::make($password),
                'address' => $payload['address'],
                'no_hp' => $payload['no_hp'],
                'updated_at' => $now,
            ]);
    }

    public static function delete_($id){
        return DB::table('users')
            ->where('users.id', $id)
            ->delete();
    }
}
