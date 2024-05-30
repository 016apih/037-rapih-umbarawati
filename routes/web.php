<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

// halaman Guest
Route::controller(HomepageController::class)->group(function(){
    Route::get("/", "index")->name('homepage');

    Route::get("/view-more", "more")->name('homepage.more');

    Route::get("/detail/{id}", "detail")->name('homepage.detail');
    
    Route::get('/search', 'search')->name('homepage.search');
});

Route::controller(AuthController::class)->prefix("auth")->name('auth.')->group(function(){
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');

    Route::get("/register", "registerPage")->name('registerPage');
    Route::post("/register", "register")->name('register');
});

// Rute untuk halaman admin
Route::middleware(['authenticate:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(RoleController::class)->group(function () {
        Route::get('/roles', 'roles')->name('roles');
        Route::post('/roles/create/{id?}', 'storeRole')->name('roles.create');
        Route::put('/roles/edit/{id}', 'updateRole')->name('roles.edit');
        Route::delete('/roles/delete/{id}', 'destroyRole')->name('roles.delete');
        Route::get('/roles/{mode}/{id?}', 'showRole')->name('roles.action');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'users')->name('users');
        Route::post('/users/create/{id?}', 'storeUser')->name('users.create');
        Route::put('/users/edit/{id}', 'updateUser')->name('users.edit');
        Route::delete('/users/delete/{id}', 'destroyUser')->name('users.delete');
        Route::get('/users/{mode}/{id?}', 'showUser')->name('users.action');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'users')->name('users');
        Route::post('/users/create/{id?}', 'storeUser')->name('users.create');
        Route::put('/users/edit/{id}', 'updateUser')->name('users.edit');
        Route::delete('/users/delete/{id}', 'destroyUser')->name('users.delete');
        Route::get('/users/{mode}/{id?}', 'showUser')->name('users.action');
    });

    Route::controller(BookController::class)->group(function () {
        Route::get('/books', 'books')->name('books');
        Route::post('/books/create/{id?}', 'storeBook')->name('books.create');
        Route::put('/books/edit/{id}', 'updateBook')->name('books.edit');
        Route::delete('/books/delete/{id}', 'destroyBook')->name('books.delete');
        Route::get('/books/{mode}/{id?}', 'showBook')->name('books.action');
    });

    Route::controller(LoanController::class)->group(function () {
        Route::get('/loans', 'loans')->name('loans');
        Route::post('/loans/create/{id?}', 'storeLoan')->name('loans.create');
        Route::put('/loans/edit/{id}', 'updateLoan')->name('loans.edit');
        Route::delete('/loans/delete/{id}', 'destroyLoan')->name('loans.delete');
        Route::get('/loans/{mode}/{id?}', 'showLoan')->name('loans.action');
    });
});

// Rute untuk halaman member
Route::controller(MemberController::class)->middleware(['authenticate:member'])->prefix('member')->name('member.')->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/activity', 'activity')->name('activity');
    Route::get('/loans', 'formLoan')->name('loans');
    Route::post('/loans/{bookId}', 'storeLoan')->name('storeLoan');
});
