<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;

    public function __construct(){
        $this->categories = [
            [
                'id' => 1,
                'name' => 'Self Dev',
                'created_at' =>  '15/05/2024',
            ], [
                'id' => 2,
                'name' => 'Agama',
                'created_at' =>  '15/05/2024',
            ], [
                'id' => 3,
                'name' => 'Novel',
                'created_at' =>  '15/05/2024',
            ]
        ];
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->categories;
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
    public function show(string $id)
    {
        //
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
