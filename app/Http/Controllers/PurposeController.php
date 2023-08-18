<?php

namespace App\Http\Controllers;

use App\Models\Purpose;
use Illuminate\Http\Request;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purposes = Purpose::all();
        return view('FrontOffice/Purpose/index', compact('purposes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FrontOffice/Purpose/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purpose = new Purpose();
        $purpose->purpose = $request->purpose;
        $purpose->save();
        return redirect()->route('purpose.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purpose $purpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $purpose = Purpose::where('id', $id)->first();
        return view('FrontOffice/Purpose/edit', compact('purpose'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $purpose = Purpose::where('id', $id)->first();
        $purpose->purpose = $request->purpose;
        $purpose->save();
        return redirect()->route('purpose.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $purpose = Purpose::where('id', $id)->first();
        $purpose->delete();
        return redirect()->route('purpose.index');
        
    }
}
