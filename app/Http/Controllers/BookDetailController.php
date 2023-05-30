<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookDetailController extends Controller
{
    public function viewbooks (){
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function findbooksindex ($id) {
        $books = Book::find($id);

        return view('detail', compact('books'));
    }
}
