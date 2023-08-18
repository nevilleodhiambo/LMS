<?php

namespace App\Http\Controllers;

use App\Models\kidato;
use Illuminate\Http\Request;

class KidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kidatos = kidato::all();
        return view('academics/class/index', compact('kidatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('academics/class/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kidato = new Kidato();
        $kidato->name = $request->name;
        $kidato->save();
        return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kidato $kidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kidato = kidato::where('id', $id)->first();
        return view('academics/class/edit', compact('kidato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kidato = Kidato::where('id', $id)->first();
        $kidato->name = $request->name;
        $kidato->save();
        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kidato = Kidato::where('id', $id)->first();
        $kidato->delete();
        return redirect()->back();
    }
}
