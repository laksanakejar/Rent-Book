<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Auth\Validate;

class BookController extends Controller
{
    public function book()
    {
        $book = Book::all();
        return view('dashboard.book', compact('book'));
    }

    public function create()
    {
        return view('create.create-book');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'cover' => 'required',
            'synopsis' => 'required',
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'cover' => $request->cover,
            'synopsis' => $request->synopsis
        ]);

        return redirect('/dashboard.book');
    }
    
}
