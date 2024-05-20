<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get("/users", "getUsers")->name('users');
    Route::get("/user/create", "create")->name('users.add');
    Route::get("/user/{id}", "detailUser");
    Route::post("/user", "store")->name("users.store");
    Route::get("/user/{id}/edit", "edit")->name('users.edit');
    Route::put("/user/{id}", "update")->name("users.update");
    Route::delete("/user/{id}", "destroy")->name("users.destroy");
});
