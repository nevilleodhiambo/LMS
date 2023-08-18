<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terms = Term::all();
        return view('term/index', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('term/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $term = new Term();
       $term->year = $request->year;
       $term->term = $request->term;
       $term->status = $request->boolean('status');
       $term->save();
       return redirect()->route('term.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Term $term)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $term = Term::where('id', $id)->first();
        return view('term/edit', compact('term'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $term = Term::where('id', $id)->first();
        $request->boolean('status');
        $term->year = $request->year;
        $term->term = $request->term;
        $term->save();
        return redirect()->route('term.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $term = Term::where('id', $id)->first();
        $term->delete();
        return redirect()->route('term.index');

    }
}
