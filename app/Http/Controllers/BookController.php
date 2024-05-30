<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class BookController extends Controller
{
    private $validateBook;
    private $validateBookEdit;


    public function __construct(){
        $this->validateBook = [
            'category_id' => ['required'], // 'min:3'],
            'title' => ['required'], // 'min:1'],  // 'unique:user'
            'author' => ['required'], // 'min:11']
            'publisher' => ['required'],
            'publication_year' => ['required'],
            'img' => [
                'required',
                // File::types(["jpeg", "bmp", "png"])
                //     ->min('1mb')
                //     ->max('5mb')
            ]
        ];

        $this->validateBookEdit = [
            'category_id' => ['required'], // 'min:3'],
            'title' => ['required'], // 'min:1'],  // 'unique:user'
            'author' => ['required'], // 'min:11']
            'publisher' => ['required'],
            'publication_year' => ['required']
        ];
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
        $payload = $request->validate($this->validateBook);

        if($request->hasFile('img')){
            $img = $request->file('img');
            $ext = $img->extension();
            $imgName = uniqid() . "." . $ext;
            $img->move('img/', $imgName);

            $payload['img'] = "img/".$imgName;
        }
        
        $book = Book::create($payload);

        if($book){
            return view('pages.admin.books.index',[
                'books' => Book::getList(),
                'msg' => "Book added successfully"
            ]);
        }
        
    }
    public function updateBook(Request $request, int $id=null){
        $payload = $request->validate($this->validateBookEdit);

        if($request->hasFile('img')){
            $img = $request->file('img');
            $ext = $img->extension();
            $imgName = uniqid() . "." . $ext;
            $img->move('img/', $imgName);
            
            $payload['img'] = "img/".$imgName;
        }

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
}
