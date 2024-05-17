<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    Route::get("/users", "getUsers");
    
    Route::get("/users/create", "create")->name('users.create');
    Route::post("/users/create", "store")->name('users.store');
    
    Route::get("/users/{id}", "show")->name('users.detail');
});

Route::resource('roles', RoleController::class);
