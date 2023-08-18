<?php

namespace App\Http\Controllers;

use App\Models\kidato;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('academics/subject/index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kidatos = kidato::all();
        return view('academics/subject/create', compact('kidatos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->class_id = $request->class_id;
        $subject->save();
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kidatos = kidato::all();
        $subject = Subject::where('id', $id)->first();
        return view('academics/subject/edit', compact('kidatos', 'subject'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::where('id', $id)->first();
        $subject->name = $request->name;
        $subject->class_id = $request->class_id;
        $subject->save();
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::where('id', $id)->first();
        $subject->delete();
        return redirect()->back();
    }
}
