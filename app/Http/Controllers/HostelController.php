<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hostels = Hostel::all();
        return view('Hostel/index', compact('hostels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('Hostel/create', compact('employees'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hostel = new Hostel();
        $hostel->name = $request->name;
        $hostel->capacity = $request->capacity;
        $hostel->employee_id = $request->employee_id;
        $hostel->save();
        return redirect()->route('hostel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hostel $hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employees = Employee::all();

        $hostel = Hostel::where('id', $id)->first();
        return view('Hostel/edit', compact('employees', 'hostel'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hostel = Hostel::where('id', $id)->first();
        $hostel->name = $request->name;
        $hostel->capacity = $request->capacity;
        $hostel->employee_id = $request->employee_id;
        $hostel->save();
        return redirect()->route('hostel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hostel = Hostel::where('id', $id)->first();
        $hostel->delete();
        return redirect()->route('hostel.index');
        
    }
}
