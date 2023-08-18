<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\kidato;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('library/bookname/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kidatos = Kidato::all();
        $categories = Category::all();
        return view('library/bookname/create', compact('kidatos', 'categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->category_id = $request->category_id;
        $book->class_id = $request->class_id;
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kidatos = Kidato::all();
        $categories = Category::all();
        $book = Book::where('id', $id)->first();
        return view('library/bookname/edit', compact('kidatos', 'categories', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->category_id = $request->category_id;
        $book->class_id = $request->class_id;
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Category::where('id', $id)->first();
        $book->delete();
        return redirect()->back();
    }
}
