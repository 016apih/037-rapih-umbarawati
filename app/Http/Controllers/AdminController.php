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
    private $validateUser;
    private $validateRole;
    private $validateBook;
    private $validateLoan;

    public function __construct(){
        $this->validateUser = [
            'username' => ['required'], // 'min:3'],
            'email' => ['required'], // 'min:1'],  // 'unique:user'
            'no_hp' => ['required'], // 'min:11']
            'address' => ['nullable']
        ];
        $this->validateRole = [ 'name' => ['required', 'min:3'] ];
        $this->validateBook = [
            'category_id' => ['required'], // 'min:3'],
            'title' => ['required'], // 'min:1'],  // 'unique:user'
            'author' => ['required'], // 'min:11']
            'publisher' => ['required'],
            'publication_year' => ['required'],
            'img' => ['required'],
            'stock' => ['nullable'],
            'status' => ['nullable'],
        ];
        $this->validateLoan = [
            'user_id' => ['required'], // 'min:3'],\
            'book_id' => ['required'], // 'min:3'],\
            'status' => ['required'],
            'return_date' => ['required']
        ];
    }

    public function dashboard(){
        return view('pages.admin.index');
    }

    public function roles(){
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => ''
        ]);
    }
    public function showRole(string $mode, int $id=null){

        return view('pages.admin.roles.form', [
            'role' => Role::getById($id),
            'mode' => $mode
        ]);
    }
    public function storeRole(Request $request){
        $payload = $request->all();

        $payload = $request->validate($this->validateRole);

        $role = Role::create($payload);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role added successfully"
        ]);
    }
    public function updateRole(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateRole);

        $role = Role::update_($payload, $id);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role Edited successfully"
        ]);
    }
    public function destroyRole(int $id){
        $role = Role::delete_($id);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role deleted successfully"
        ]);
    }

    public function users(){
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => ''
        ]);
    }
    public function showUser(string $mode, int $id=null){
        
        return view('pages.admin.users.form', [
            'user' => ser::getById($id),
            'roles' => Role::getList(),
            'mode' => $mode
        ]);
    }
    public function storeUser(Request $request){
        $payload = $request->all();
        
        $payload = $request->validate($this->validateUser);

        $user = User::create($payload);

        if($user){
            return view('pages.admin.users.index',[
                'users' => User::getList(),
                'msg' => "user added successfully"
            ]);
        }
        
    }
    public function updateUser(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateUser);

        $user = User::update_($payload, $id);
        
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => "User Edited successfully"
        ]);
    }
    public function destroyUser(int $id){
        $user = User::delete_($id);
        
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => "role deleted successfully"
        ]);
    }

    public function books(){
        return view('pages.admin.books.index', [
            'books' => Book::getList(),
            'msg' => ''
        ]);
    }
    public function showBook(string $mode, int $id=null){
        
        return view('pages.admin.books.form', [
            'book' => Book::getById($id),
            'categories' => Category::getList(),
            'mode' => $mode
        ]);
    }
    public function storeBook(Request $request){
        $payload = $request->all();
        
        $payload = $request->validate($this->validateBook);
        
        $book = Book::create($payload);

        if($book){
            return view('pages.admin.books.index',[
                'books' => Book::getList(),
                'msg' => "Book added successfully"
            ]);
        }
        
    }
    public function updateBook(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateBook);

        $book = Book::update_($payload, $id);
        
        if($book){
            return view('pages.admin.books.index',[
                'books' => Book::getList(),
                'msg' => "Book updated successfully"
            ]);
        }
    }
    public function destroyBook(int $id){
        $book = Book::delete_($id);
        
        if($book){
            return view('pages.admin.books.index',[
                'books' => Book::getList(),
                'msg' => "Book deleted successfully"
            ]);
        }
    }

    public function loans(){
        return view('pages.admin.loans.index',[
            'loans' => Loan::getList(),
            'msg' => ''
        ]);
    }
    public function showLoan(string $mode, int $id=null){
        
        return view('pages.admin.loans.form', [
            'loan' => Loan::getById($id),
            'books' => Book::getList(),
            'users' => User::getList(),
            'mode' => $mode
        ]);
    }
    public function storeLoan(Request $request){
        $payload = $request->all();

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
