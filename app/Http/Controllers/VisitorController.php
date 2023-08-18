<?php

namespace App\Http\Controllers;

use App\Models\Purpose;
use App\Models\visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitors  = visitor::all();
        return view('FrontOffice/Visitor/index', compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $purposes = Purpose::all();
        return view('FrontOffice/visitor/create', compact('purposes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitor = new visitor();
        $visitor->name = $request->name;
        $visitor->purpose_id = $request->purpose_id;
        $visitor->email = $request->email;
        $visitor->phone = $request->phone;
        $visitor->vdate = $request->vdate;
        $visitor->fdate = $request->fdate;
        $visitor->add = $request->add;
        $visitor->save();
        return redirect()->route('visitor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $purposes = Purpose::all();
        $visitor = visitor::where('id', $id)->first();
        return view('FrontOffice/visitor/create', compact('visitor', 'purposes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $visitor = visitor::where('id', $id)->first();
        $visitor->name = $request->name;
        $visitor->purpose_id = $request->purpose_id;
        $visitor->email = $request->email;
        $visitor->phone = $request->phone;
        $visitor->vdate = $request->vdate;
        $visitor->fdate = $request->fdate;
        $visitor->add = $request->add;
        $visitor->save();
        return redirect()->route('visitor.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $visitor = visitor::where('id', $id)->first();
        $visitor->delete();
        return redirect()->back();
    }
}
