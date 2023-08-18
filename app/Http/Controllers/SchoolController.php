<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::all();
        return view('school/index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $school = new School();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->phone = $request->phone;
        $school->altphone = $request->altphone;
        $school->email = $request->email;
        $school->altphone = $request->altphone;
        $school->website = $request->website;
        $school->logo = $request->logo;
        $school->save();
        return redirect()->route('school.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $school = School::where('id', $id)->first();
        return view('school/edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $school = School::where('id', $id)->first();
        $school->name = $request->name;
        $school->address = $request->address;
        $school->phone = $request->phone;
        $school->altphone = $request->altphone;
        $school->email = $request->email;
        $school->altphone = $request->altphone;
        $school->website = $request->website;
        
        // 'logo'
        $school->save();
        return redirect()->route('school.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $school = School::where('id', $id)->first();
        $school->delete();
        return redirect()->route('school.index');

    }
}
