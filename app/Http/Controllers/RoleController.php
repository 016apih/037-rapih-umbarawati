<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $roles;

    public function __construct(){

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.roles.create', ['mode' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $newRole = [
            'id' =>  end($this->roles)['id'] + 1,
            'name' => $payload['name'],
            'created_at' => date('d/m/Y')
        ];
        array_push($this->roles, $newRole);
        
        return  $this->roles;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $result = Book::find($id);

        if (!$result) {
            $result = null;
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
