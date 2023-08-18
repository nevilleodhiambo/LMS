<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Subject;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee/employee/index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $subjects = Subject::all();
        return view('employee/employee/create', compact('departments', 'subjects'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name= $request->name;
        $employee->email= $request->email;
        $employee->address= $request->address;
        $employee->phone= $request->phone;
        $employee->idno= $request->idno;
        $employee->gender= $request->gender;
        $employee->religion= $request->religion;
        $employee->dob= $request->dob;
        $employee->photo= $request->photo;
        $employee->signature= $request->signature;
        $employee->department_id= $request->department_id;
        $employee->designation= $request->designation;
        $employee->qualification= $request->qualification;
        $employee->subject_id= $request->subject_id;
        $employee->jsd= $request->jsd;
        $employee->jobno= $request->jobno;
        $employee->salary= $request->salary;
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departments = Department::all();
        $subjects = Subject::all();
        $employee = Employee::where('id', $id)->first();
        return view('employee/employee/edit', compact('departments', 'employee','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->name= $request->name;
        $employee->email= $request->email;
        $employee->address= $request->address;
        $employee->phone= $request->phone;
        $employee->idno= $request->idno;
        $employee->gender= $request->gender;
        $employee->religion= $request->religion;
        $employee->dob= $request->dob;
        $employee->photo= $request->photo;
        $employee->signature= $request->signature;
        $employee->department_id= $request->department_id;
        $employee->designation= $request->designation;
        $employee->qualification= $request->qualification;
        $employee->subject_id= $request->subject_id;
        $employee->jsd= $request->jsd;
        $employee->jobno= $request->jobno;
        $employee->salary= $request->salary;
        $employee->save();
        return redirect()->route('employee.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->delete();

        return redirect()->back();
    }
}
