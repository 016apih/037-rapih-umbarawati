<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Loan;
use App\Models\Book;


class MemberController extends Controller
{
    public function profile(){
        return view('pages.member.index');
    }

    public function activity(){
        return view('pages.member.activity', [
            'actiities' => Loan::getByUserId(session()->get('userId'))
        ]);
    }

    public function formLoan(){
        return view('pages.member.form-loan', [
            'books' => Book::getList()
        ]);
    }

    public function storeLoan(int $bookId){
        $book = Book::getById($bookId);
        $now = Carbon::now();
        $loan = Loan::create([
            'book_id' => $book->id,
            'user_id' => session()->get('userId'),
            'status' => 'active',
            'return_date' =>  $now->addDays(5)->format('Y-m-d')
        ]);
        
        if($loan){
            return view('pages.member.activity', [
                'actiities' => Loan::getByUserId(session()->get('userId'))
            ]);
        }
    }
}
