<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

// halaman Guest
Route::controller(HomepageController::class)->group(function(){
    Route::get("/", "index")->name('homepage');

    Route::get("/login", "login")->name('login');
    Route::post("/login", "show")->name('show');

    Route::get("/register", "register")->name('register');
    Route::post("/register", "store")->name('store');

    Route::get("/view-more", "more")->name('homepage.more');

    Route::get("/detail/{id}", "detail")->name('homepage.detail');
});

// Rute untuk halaman admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/roles', [AdminController::class, 'roles'])->name('roles');
    Route::post('/roles/create', [AdminController::class, 'storeRole'])->name('roles.store');
    Route::get('/roles/{mode}/{id?}', [AdminController::class, 'showRole'])->name('roles.action');

    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::post('/users/create', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{mode}/{id?}', [AdminController::class, 'showUser'])->name('users.action');

    Route::get('/books', [AdminController::class, 'books'])->name('books');
    Route::post('/books/create', [AdminController::class, 'storeBook'])->name('books.store');
    Route::get('/books/{mode}/{id?}', [AdminController::class, 'showBook'])->name('books.action');

    Route::get('/loans', [AdminController::class, 'loans'])->name('loans');
    Route::post('/loans/create', [AdminController::class, 'storeLoan'])->name('loans.store');
    Route::get('/loans/{mode}/{id?}', [AdminController::class, 'showLoan'])->name('loans.action');
});

// Rute untuk halaman member
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
    Route::get('/activity', [MemberController::class, 'activity'])->name('activity');
    Route::get('/loans', [MemberController::class, 'formLoan'])->name('loans');
});
