<?php

namespace App\Http\Controllers;

use App\Models\Bcount;
use App\Models\Book;
use Illuminate\Http\Request;

class BcountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bcounts = Bcount::all();
        return view('library/bookcount/index', compact('bcounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $booknames = Book::all();
        return view('library/bookcount/create', compact('booknames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bcount = new Bcount();
        $bcount->name_id = $request->name_id;
        $bcount->number = $request->number;
        $bcount->date = $request->date;
        $bcount->save();
        return redirect()->route('bcount.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bcount $bcount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $books = Book::all();
        $bcount = Bcount::where('id', $id)->first();
        return view('library/bookcount/edit', compact('books', 'bcount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bcount = Bcount::where('id', $id)->first();
        $bcount->name_id = $request->name_id;
        $bcount->number = $request->number;
        $bcount->date = $request->date;
        $bcount->save();
        return redirect()->route('bcount.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bcount = Bcount::where('id', $id)->first();
        $bcount->delete();
        return redirect()->back();        
    }
}
