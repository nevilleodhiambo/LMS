<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('Transport/vehicle/index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('Transport/vehicle/create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->regno = $request->regno;
        $vehicle->capacity = $request->capacity;
        $vehicle->employee_id = $request->employee_id;
        $vehicle->conductor_id = $request->conductor_id;
        $vehicle->save();
        return redirect()->route('vehicle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicle = Vehicle::where('id', $id)->first();
        $employees = Employee::all();
        return view('Transport/vehicle/.edit', compact('employees','vehicle'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::where('id', $id)->first();
        $vehicle->regno = $request->regno;
        $vehicle->capacity = $request->capacity;
        $vehicle->employee_id = $request->employee_id;
        $vehicle->conductor_id = $request->conductor_id;
        $vehicle->save();
        return redirect()->route('vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::where('id', $id)->first();
        $vehicle->delete();
        return redirect()->route('vehicle.index');

    }
}
