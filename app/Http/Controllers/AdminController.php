<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Category;
use App\Models\User;
use App\Models\Book;
use App\Models\Loan;

class AdminController extends Controller
{
    public function dashboard(){
        return view('pages.admin.index', [
            'nBook' => Book::getCount(),
            'nUser' => User::getCount(),
            'nRole' => Role::getCount(),
            'nCategory' => Category::getCount(),
            'nLoan' => Loan::getCount(),
        ]);
    }
}
