<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\RoleController;

class UserController extends Controller
{
    private $users;

    public function __construct(RoleController $roleController){
        $this->users = [
            [
                'id' => 1,
                'role_id' => 1,
                'role_name' => $roleController->show(1)['name'], // JOIN Table
                'username' => 'Akun Admin',
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'address' => "alamat",
                'no_hp' => '08963456789',
                'created_at' => '15/05/2024',
            ],[
                'id' => 2,
                'role_id' => 2,
                'role_name' =>  $roleController->show(2)['name'], // JOIN Table,
                'username' => 'Akun Member',
                'email' => 'member@gmail.com',
                'password' => 'password',
                'address' => "alamat",
                'no_hp' => '08963456789',
                'created_at' => '15/05/2024',
            ]
        ];
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->users;
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

        foreach($this->users as $user){
            if($user['id'] == $id){
                $result = $user;
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
