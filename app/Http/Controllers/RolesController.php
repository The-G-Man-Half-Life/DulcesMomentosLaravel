<?php

namespace App\Http\Controllers;

use App\Models\Role; 
use Illuminate\Http\Request;

class RolesController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles')); 
    }

    
    public function create()
    {
        return view('roles.create'); 
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:roles',
            'description' => 'nullable|string',
        ]);

        $role = Role::create($validatedData);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    
    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('roles.show', compact('role')); 
    }

    
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('roles.edit', compact('role')); 
    }

    
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'description' => 'nullable|string',
        ]);

        $role->update($validatedData);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
