<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loans = [
            [
                'id' => 1,
                'book_id' => 1,
                'user_id' => 2,
                'loan_date' => '2024-05-17 00:00:00',
                'status' => 'active',
                'return_date' => '2024-05-19 00:00:00',
                'loan_time' => 2,
                'created_at' => '2024-05-15 00:00:00',
            ],  [
                'id' => 2,
                'book_id' => 2,
                'user_id' => 2,
                'loan_date' => '2024-05-17 00:00:00',
                'status' => 'return',
                'return_date' => '2024-05-19 00:00:00',
                'loan_time' => 2,
                'created_at' => '2024-05-15 00:00:00',
            ],
        ];
        Loan::insert($loans);
    }
}
