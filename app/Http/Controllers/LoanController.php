<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

use App\Http\Controllers\CategoryController;

class LoanController extends Controller
{
    private $validateLoan;

    public function __construct(){
        $this->validateLoan = [
            'user_id' => ['required'], // 'min:3'],\
            'book_id' => ['required'], // 'min:3'],\
            'status' => ['required'],
            'return_date' => ['required']
        ];
    }

    public function loans(){
        return view('pages.admin.loans.index',[
            'loans' => Loan::getList(),
            'msg' => ''
        ]);
    }
    public function showLoan(string $mode, int $id=null){
        $books = Book::getList();
        if($mode == 'create'){
            $books = Book::getByFieldValue('status', 'available');
        }
        
        return view('pages.admin.loans.form', [
            'loan' => Loan::getById($id),
            'books' =>$books,
            'users' => User::getList(),
            'mode' => $mode
        ]);
    }
    public function storeLoan(Request $request){
        $payload = $request->validate($this->validateLoan);

        $loan = Loan::create($payload);

        if($loan){
            return view('pages.admin.loans.index',[
                'loans' => Loan::getList(),
                'msg' => "Loan added successfully"
            ]);
        }
    }
    public function updateLoan(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateLoan);

        $loan = Loan::update_($payload, $id);
        
        if($loan){
            return view('pages.admin.loans.index',[
                'loans' => Loan::getList(),
                'msg' => "Loan updated successfully"
            ]);
        }
    }
    public function destroyLoan(int $id){
        $loan = Loan::delete_($id);
        
        if($loan){
            return view('pages.admin.Loans.index',[
                'loans' => Loan::getList(),
                'msg' => "Loan deleted successfully"
            ]);
        }
    }
}
