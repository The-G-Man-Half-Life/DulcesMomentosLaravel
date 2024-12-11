<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index', compact('statuses')); 
    }

    
    public function create()
    {
        return view('statuses.create'); 
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:statuses',
            'description' => 'nullable|string',
        ]);

        $status = Status::create($validatedData);

        return redirect()->route('statuses.index')->with('success', 'status created successfully.');
    }

    
    public function show($id)
    {
        $status = Status::findOrFail($id);

        return view('statuses.show', compact('status')); 
    }

    
    public function edit($id)
    {
        $status = Status::findOrFail($id);

        return view('statuses.edit', compact('status')); 
    }

    
    public function update(Request $request, $id)
    {
        $status = Status::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:statuses,name,' . $status->id,
            'description' => 'nullable|string',
        ]);

        $status->update($validatedData);

        return redirect()->route('statuses.index')->with('success', 'status updated successfully.');
    }

    
    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('statuses.index')->with('success', 'status deleted successfully.');
    }
}
