<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles/create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permission_ids);

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::where('id',$id)->first();
        $permissions = Permission::all();
        return view('roles/edit', compact('permissions','role'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $role = Role::where('id',$id)->first();
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        
        return redirect(route('roles.index'));

    }
    public function destroy($id){
        $role = Role::where('id', $id)->first();
        $role->delete();
        return redirect()->route('roles.index');
    }
}
