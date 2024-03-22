<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Category;

class UserController extends Controller
{
    public function home(){
        $books = Book::all();
        return view('pages.home', ['books'=>$books]);
    }

    public function booksList(){
        $books = Book::all();
        return view('pages.booksList', ['books'=>$books]);
    }

    public function search(Request $request){
        $categories = Category::all();
        if ($request->title) {
            $books = Book::where('title', 'LIKE', '%' . $request->title . '%')->orWhereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->categories);
            })->get();
        } else {
            $books = Book::all();
        }
        return view('pages.search', ['books' => $books, 'categories' => $categories]);
    }
}
