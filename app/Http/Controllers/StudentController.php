<?php

namespace App\Http\Controllers;

use App\Models\kidato;
use App\Models\Stream;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student/student/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kidatos = kidato::all();
        $streams = Stream::all();
        return view('student/student/create', compact('kidatos', 'streams'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->religion = $request->religion;
        $student->date = $request->date;
        $student->upi = $request->upi;
        $student->national = $request->national;
        $student->nationality = $request->nationality;
        $student->mname = $request->mname;
        $student->memail = $request->memail;
        $student->mnumber = $request->mnumber;
        $student->fname = $request->fname;
        $student->fnumber = $request->fnumber;
        $student->femail = $request->femail;
        $student->gname = $request->gname;
        $student->gemail = $request->gemail;
        $student->gnumber = $request->gnumber;
        $student->adm = $request->adm;
        $student->raddress = $request->raddress;
        $student->paddress = $request->paddress;
        $student->class_id = $request->class_id;
        $student->stream_id = $request->stream_id;

        // if ($request->hasFile('photo')) {
        //     $photo = $request->file('photo');
        //     $filename = Carbon::now()->format('YmdHis') . '_' . $photo->getClientOriginalName();
        //     $photo->storeAs('photos', $filename, 'public');
        
        //     return 'Photo uploaded successfully.';
        // } 

        $filename = time().$request->file('filename')->getClientOriginalName();
        $path = $request->file('filename')->storeAs('images', $filename, 'public');
        $student["filename"] = '/storage/'.$path;
        $student->save();
        return redirect()->route('student.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kidatos = kidato::all();
        $streams = Stream::all();
        $student = Student::where('id', $id)->first();
        return view('student/student/edit', compact('student', 'kidatos', 'streams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::where('id', $id)->first();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->religion = $request->religion;
        $student->date = $request->date;
        $student->upi = $request->upi;
        $student->national = $request->national;
        $student->nationality = $request->nationality;
        $student->mname = $request->mname;
        $student->memail = $request->memail;
        $student->mnumber = $request->mnumber;
        $student->fname = $request->fname;
        $student->fnumber = $request->fnumber;
        $student->femail = $request->femail;
        $student->gname = $request->gname;
        $student->gemail = $request->gemail;
        $student->gnumber = $request->gnumber;
        $student->adm = $request->adm;
        $student->raddress = $request->raddress;
        $student->paddress = $request->paddress;
        $student->class_id = $request->class_id;
        $student->stream_id = $request->stream_id;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return redirect()->back();
    }
}
