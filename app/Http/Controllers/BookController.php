<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getBooks()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function getBook($bookId)
    {
        $book = Book::find($bookId);
        return response()->json($book);
    }

    public function createBook(Request $request)
    {
        $book = Book::create($request);
        return response()->json($book);
    }

    public function updateBook(Request $request)
    {
        $book = Book::create($request);
        return response()->json($book);
    }

    public function deleteBook($bookId)
    {
        $book = Book::find($bookId)->delete();
        return response()->json($book);
    }
}
