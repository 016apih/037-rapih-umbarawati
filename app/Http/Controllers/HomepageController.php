<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

class HomepageController extends Controller
{
    private $users;
    private $books;
    private $categories;

    public function __construct(BookController $bookController, UserController $userController, CategoryController $categoryController){
        $this->users = $userController->index();
        $this->books = $bookController->index();
        $this->categories = $categoryController->index();
    }

    public function index(){
        return view('pages.homepage.index', [
            'books' => $this->books,
            'categories' => $this->categories
        ]);
    }

    public function more(){
        return view('pages.homepage.more-page', [
            'books' => $this->books,
            'categories' => $this->categories
        ]);
    }

    public function detail(string $id){
        $result = null;
        foreach($this->books as $book){
            if($book["id"] == $id){
                $result = $book;
            }
        }

        return view('pages.homepage.detail-page', [
            'books' => $this->books,
            'book' => $result
        ]);
    }

    public function login(){
        return view('pages.auth.login', [
            "payload" => [
                'email' => $this->users[0]['email'],
                'password' => $this->users[0]['password']
            ]
        ]);
    }

    public function show(Request $request){
        $payload = $request->all();
        $payload = $request->validate([
            'email' => ['required'], // 'min:1'],  // 'unique:user'
            'password' => ['required'], // 'min:4'],
        ]);

        $result = null;
        foreach($this->users as $user){
            if($user["email"] == $payload['email']){
                $result = $user;
            }
        }

        if($result['role_id'] == 1){
            return view('pages.admin.index', ['user' => $result]);
        } else {
            return view('pages.member.index', ['user' => $result]);
        }
    }

    public function register(){
        return view('pages.auth.register');
    }

    public function store(Request $request){
        $payload = $request->all();

        $payload = $request->validate([
            'username' => ['required'], // 'min:3'],
            'email' => ['required'], // 'min:1'],  // 'unique:user'
            'password' => ['required'], // 'min:4'],
            'no_hp' => ['required'], // 'min:11']
        ]);

        // return view("pages.auth.register", [
        //     "payload" => $payload
        // ]);

        return view("pages.auth.login", [
            "payload" => $payload
        ]);
    }
}
