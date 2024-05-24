<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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


Route::get('/category/create', [CategoryController::class, 'store']);
Route::get('/category/list', [CategoryController::class, 'index']);
Route::get('/category/detail/{id}', [CategoryController::class, 'show']);
Route::get('/category/edit/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);

Route::get('/product/list', [ProductController::class, 'index']);
