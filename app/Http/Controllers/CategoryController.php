<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function BookDetail($id){
        $books = Category::where('category_id','=',$id);

        return view('detail', compact('books'));

    }
}
