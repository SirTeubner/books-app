<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listBooks(): View
    {
        // Abfrage mit model class Book
        $books = Book::all();

        return view('list', [
            'books' => $books
        ]);
    }
}
