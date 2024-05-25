<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('pages.homepage.index', [
            'books' => Book::getList(),
            'categories' => Category::getList()
        ]);
    }

    public function more(){
        return view('pages.homepage.more-page', [
            'books' => Book::getList(),
            'categories' => Category::getList()
        ]);
    }

    public function detail(string $id){
        $book = Book::getById($id);

        if($book == null){
            return view('pages.homepage.404');
        } else {
            return view('pages.homepage.detail-page', [
                'books' => Book::getList(),
                'book' => $book
            ]);
        }

    }
}
