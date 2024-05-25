<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'role_id' => 1,
                'username' => 'Akun Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'address' => "alamat",
                'no_hp' => '08963456789',
                'created_at' => '2024-05-15 00:00:00',
            ],[
                'id' => 2,
                'role_id' => 2,
                'username' => 'Akun Member',
                'email' => 'member@gmail.com',
                'password' => Hash::make('password'),
                'address' => "alamat",
                'no_hp' => '08963456789',
                'created_at' => '2024-05-15 00:00:00',
            ]
        ];
        User::insert($users);
    }
}
