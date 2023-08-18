<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\kidato;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        return view('Exam/exam/index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kidatos = kidato::all();
        return view('Exam/exam/create', compact('kidatos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exam = new Exam();
        $exam->name = $request->name;
        $exam->class_id = $request->class_id;
        $exam->save();
        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kidatos = kidato::all();
        $exam = Exam::where('id', $id)->first();
        return view('Exam/exam/edit', compact('exam', 'kidatos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $exam = Exam::where('id', $id)->first();
        $exam->name = $request->name;
        $exam->class_id = $request->class_id;
        $exam->save();
        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exam = Exam::where('id', $id)->first();
        $exam->delete();
        return redirect()->route('exam.index');
        
    }
}
