<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;

class LoanController extends Controller
{
    private $loans;

    public function __construct(
        BookController $bookController,
        UserController $userController
    ){
        $this->loans = [
            [
                'id' => 1,
                'book_id' => 1,
                'book' => $bookController->show(1),
                'user_id' => 2,
                'user' => $userController->show(2),
                'loan_date' => '17/05/2024',
                'status' => 'active',
                'return_date' => '19/05/2024',
                'loan_time' => 2,
                'created_at' => '17/05/2024',
            ],  [
                'id' => 2,
                'book_id' => 2,
                'book' => $bookController->show(2),
                'user_id' => 2,
                'user' => $userController->show(2),
                'loan_date' => '17/05/2024',
                'status' => 'active',
                'return_date' => '19/05/2024',
                'loan_time' => 2,
                'created_at' => '17/05/2024',
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->loans;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $result = null;

        foreach($this->loans as $loan){
            if($loan['id'] == $id){
                $result = $loan;
            }
        }
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
