<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoanController;

class AdminController extends Controller
{
    private $users;
    private $auth;

    private $books;
    private $categories;
    private $roles;

    public function __construct(
        BookController $bookController,
        UserController $userController,
        CategoryController $categoryController,
        RoleController $roleController
    ){
        $this->users = $userController->index();
        $this->books = $bookController->index();
        $this->categories = $categoryController->index();
        $this->roles = $roleController->index();
        $this->auth = $userController->show(1);
    }

    public function dashboard(){
        return view('pages.admin.index',[
            'auth' => $this->auth
        ]);
    }

    public function roles(){
        return view('pages.admin.roles.index',[
            'auth' => $this->auth,
            'roles' => $this->roles,
            'msg' => ''
        ]);
    }
    public function showRole(RoleController $roleController, string $mode, int $id=null){
        $role = null;

        if($mode != "create"){
            $role = $roleController->show($id);
        }
        
        return view('pages.admin.roles.form', [
            'auth' => $this->auth,
            'role' => $role,
            'mode' => $mode
        ]);
    }
    public function storeRole(RoleController $roleController, Request $request){
        $payload = $request->all();

        $payload = $request->validate([ 'name' => ['required', 'min:3'] ]);

        $result = $roleController->store($request);
        
        return view('pages.admin.roles.index',[
            'auth' => $this->auth,
            'roles' => $result,
            'msg' => "role added successfully"
        ]);
    }


    public function users(){
        return view('pages.admin.users.index',[
            'auth' => $this->auth,
            'users' => $this->users,
            'msg' => ''
        ]);
    }
    public function showUser(UserController $userController, string $mode, int $id=null){
        $user = null;

        if($mode != "create"){
            $user = $userController->show($id);
        }
        
        return view('pages.admin.users.form', [
            'auth' => $this->auth,
            'user' => $user,
            'roles' => $this->roles,
            'mode' => $mode
        ]);
    }
    public function storeUser(UserController $userController, Request $request){
        $payload = $request->all();

        $payload = $request->validate([ 'name' => ['required', 'min:3'] ]);

        $result = $userController->store($request);
        
        return view('pages.admin.users.index',[
            'auth' => $this->auth,
            'users' => $result,
            'msg' => "user added successfully"
        ]);
    }

    public function books(){
        return view('pages.admin.books.index',[
            'auth' => $this->auth,
            'books' => $this->books,
            'msg' => ''
        ]);
    }
    public function showBook(BookController $bookController, string $mode, int $id=null){
        $book = null;

        if($mode != "create"){
            $book = $bookController->show($id);
        }
        
        return view('pages.admin.books.form', [
            'auth' => $this->auth,
            'book' => $book,
            'mode' => $mode
        ]);
    }
    public function storeBook(BookController $bookController, Request $request){
        $payload = $request->all();

        $payload = $request->validate([ 'name' => ['required', 'min:3'] ]);

        $result = $bookController->store($request);
        
        return view('pages.admin.books.index',[
            'auth' => $this->auth,
            'books' => $result,
            'msg' => "role added successfully"
        ]);
    }

    public function loans(LoanController $loanController){
        return view('pages.admin.loans.index',[
            'auth' => $this->auth,
            'loans' => $loanController->index(),
            'msg' => ''
        ]);
    }
    public function showLoan(LoanController $loanController, string $mode, int $id=null){
        $loan = null;

        if($mode != "create"){
            $loan = $loanController->show($id);
        }
        
        return view('pages.admin.loans.form', [
            'auth' => $this->auth,
            'loan' => $loan,
            'mode' => $mode
        ]);
    }
    public function storeLoan(LoanController $loanController, Request $request){
        $payload = $request->all();

        $payload = $request->validate([ 'name' => ['required', 'min:3'] ]);

        $result = $loanController->store($request);
        
        return view('pages.admin.loans.index',[
            'auth' => $this->auth,
            'loans' => $result,
            'msg' => "role added successfully"
        ]);
    }
}
