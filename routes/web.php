<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// with data & for looping
Route::get("/users", function(){
    return view("users.index", [
        "users" => [[
            "id" => 1,
            "name" => "<h4 style='color:#ff0000'>Juna</h4>",
            "age" => 18
        ], [
            "id" => 2,
            "name" => "Kevin",
            "age" => 28
        ], [
            "id" => 3,
            "name" => "Stevano",
            "age" => 28
        ]]
    ]);
});

Route::get("/users/{id}", function(int $id){
    $users = [[
        "id" => 1,
        "name" => "<h4 style='color:#ff0000'>Juna</h4>",
        "age" => 18
    ], [
        "id" => 2,
        "name" => "Kevin",
        "age" => 28
    ], [
        "id" => 3,
        "name" => "Stevano",
        "age" => 28
    ]];

    $result = null;
    foreach($users as $user){
        if($user["id"] == $id){
            $result = $user;
        }
    }
    
    return view("users.detail", [
        "user" => $result
    ]);
})->name("users.detail");

// with requestdata for if conditional
// Route::get("/users", function(Request $request){
//     return view("users.index",[
//         "name" => $request->name
//     ]);
// });

// for looping
