<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->get();
        return $categories;
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
        // insert Data
        Category::query()->create([
            "name" => "Elektronik"
        ]);
        Category::query()->create([
            "name" => "Alat makan"
        ]);
        Category::query()->create([
            "name" => "Alat Mandi"
        ]);
        return "data berhasil ditambah";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category = Category::query() // from category
            ->where("id", "=", $id) // where
            ->first(); // limit 1
        
        return $category;
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
        $category = Category::query() // from category
            ->where("id", "=", $id) // where
            ->first(); // limit 1
        
        if(!$category){
            return "data tidak di temukan";
        }
        // $category->name = "Hasil edit";
        $category->fill([
            "name" => $request->post('name')
        ]);
        $category->save();
        
        return "kategory berhasil di ubah";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::query() // from category
            ->where("id", "=", $id) // where
            ->first(); // limit 1

        if(!$category){
            return "data tidak di temukan";
        }

        $category->delete();

        return "category berhasil di hapus";
    }
}
