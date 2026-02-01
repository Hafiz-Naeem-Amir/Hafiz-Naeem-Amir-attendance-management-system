<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display designations
        $designations = Designation::all(); // 10 per page

        return view('attendance-system.pages.designation.designation', compact('designations'));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Store in database
        Designation::create([
            'name' => $request->name,
        ]);

        // Redirect back with success message
        return redirect()->route('designation.index')->with('success', 'Designation created successfully.');
    }
    // EDIT
    public function edit($id)
    {
        $designations = Designation::all();
        $editDesignation = Designation::findOrFail($id);

        return view(
            'attendance-system.pages.designation.designation',
            compact('designations', 'editDesignation')
        );
    }


    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $designation = Designation::findOrFail($id);
        $designation->update([
            'name' => $request->name,
        ]);

        return redirect()->route('designation.index')
            ->with('success', 'Designation updated successfully.');
    }


    // DELETE
    public function destroy($id)
    {
        $designation = Designation::findOrFail($id);
        $designation->delete();

        return redirect()->route('designation.index')
            ->with('success', 'Designation deleted successfully.');
    }
}
