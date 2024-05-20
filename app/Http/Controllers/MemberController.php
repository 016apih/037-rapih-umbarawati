<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoanController;

class MemberController extends Controller
{
    private $auth;

    public function __construct(UserController $userController){
        $this->auth = $userController->show(2);
    }

    public function profile(){
        return view('pages.member.index',[
            'auth' => $this->auth
        ]);
    }

    public function activity(LoanController $loanController){
        $loan = array_filter($loanController->index(), function($val){
            return $val['user_id'] == $this->auth['id'];
        });
        return view('pages.member.activity',[
            'auth' => $this->auth,
            'actiities' => $loan
        ]);
    }

    public function formLoan(BookController $bookController){
        return view('pages.member.form-loan',[
            'auth' => $this->auth,
            'books' => $bookController->index()
        ]);
    }
}
