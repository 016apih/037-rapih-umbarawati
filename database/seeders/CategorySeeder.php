<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Self Dev',
                'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 2,
                'name' => 'Agama',
                'created_at' => '2024-05-15 00:00:00',
            ], [
                'id' => 3,
                'name' => 'Novel',
                'created_at' => '2024-05-15 00:00:00',
            ]
        ];

        Category::insert($categories);
    }
}
