<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2024-05-15 00:00:00',
            ],[
                'id' => 2,
                'name' => 'member',
                'created_at' => '2024-05-15 00:00:00',
            ],
        ];

        Role::insert($roles);
    }
}
