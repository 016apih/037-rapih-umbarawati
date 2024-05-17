<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $users = [
            [
                "id" => 1,
                "nama" => "ronald Alberty",
                "umur" => 20
            ], [
                "id" => 2,
                "nama" => "Kevin Leonardo",
                "umur" => 20
            ], [
                "id" => 3,
                "nama" => "Stevano Michael",
                "umur" => 20
            ]
        ];
        return view("users.index", ['users' => $users]);
    }

    public function show(int $id)
    {
        $users = [
            [
                "id" => 1,
                "nama" => "ronald Alberty",
                "umur" => 20
            ], [
                "id" => 2,
                "nama" => "Kevin Leonardo",
                "umur" => 20
            ], [
                "id" => 3,
                "nama" => "Stevano Michael",
                "umur" => 20
            ]
        ];
        $result = null;
        foreach($users as $user){
            if($user['id'] === $id){
                $result = $user;
            }
        }
        return view('users.detail', [
            'user' =>  $result
        ]);
    }

    public function create(){
        return view('users.create');
    }
    public function store (Request $request){
        $payload = $request->all();

        // if($payload['nama'] == null || $payload["umur"] == null){
        //     return view("users.create", ["error" => "Input Salah"]);
        // }

        $payload = $request->validate([
            'nama' => ['required', 'min:3'],
            'umur' => ['required', 'min:1', 'integer'],
            'gambar' => ['required', 'file', 'extensions:png,jpg,jpeg']
        ]);

        if($request->hasFile('gambar')){
            $img = $request->file('gambar');
            $imgName = time() . "-" . $img->hashName();
            $img->move("upload/", $imgName);
        }

        return view("users.create", [
            "payload" => $payload
        ]);
    }
}
