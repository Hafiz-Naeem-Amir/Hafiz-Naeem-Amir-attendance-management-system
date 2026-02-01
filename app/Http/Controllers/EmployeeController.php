<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Franchise;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmployeeController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        $franchises = Franchise::all();
        $employees = Employee::with(['franchise', 'designation'])->get();
        return view('attendance-system.pages.employee.show', compact('employees', 'designations', 'franchises'));
    }

    public function create()
    {

        $designations = Designation::all();
        $franchises = Franchise::all();
        $employees = Employee::with(['franchise', 'designation'])->get();
        return view('attendance-system.pages.employee.employee', compact('employees', 'designations', 'franchises'));
    }

    public function store(Request $request): JsonResponse
    {
        // Validate required fields
        $request->validate([
            'emp_id' => 'required|unique:employees,emp_id',
            'name' => 'required',
            'franchise_id' => 'required|exists:franchises,id',
        ]);

        $data = $request->all();

        // Handle photo upload if provided
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/employees'), $filename);
            $data['photo'] = 'uploads/employees/' . $filename;
        } else {
            $data['photo'] = null; // optional photo
        }

        // Create employee
        $employee = Employee::create($data);

        // Return JSON response for AJAX
        return response()->json([
            'status' => 'success',
            'message' => 'Employee created successfully',
            'employee' => $employee
        ]);
    }



    public function edit($id)
    {
        // متعلقہ employee fetch کریں
        $employee = Employee::findOrFail($id);

        // تمام designations اور franchises fetch کریں
        $designations = Designation::all();
        $franchises = Franchise::all();

        // view میں data بھیجیں
        return view('attendance-system.pages.employee.edit', compact('employee', 'designations', 'franchises'));
    }


    public function update(Request $request, $id)
    {
        // Employee fetch کریں
        $employee = Employee::findOrFail($id);

        // Validation
        $request->validate([
            'emp_id' => 'required|unique:employees,emp_id,' . $employee->id,
            'name' => 'required',
            'franchise_id' => 'required|exists:franchises,id',
            'designation_id' => 'nullable|exists:designations,id',
            'status' => 'required|in:0,1',
            'phone' => 'nullable|string',
            'hire_date' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Photo update handling
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/employees'), $photoName);

            // پچھلا photo delete کریں اگر موجود ہو
            if ($employee->photo && file_exists(public_path('uploads/employees/' . $employee->photo))) {
                unlink(public_path('uploads/employees/' . $employee->photo));
            }

            $employee->photo = $photoName;
        }

        // Employee update
        $employee->update($request->except('photo'));

        return response()->json([
            'status' => 'success',
            'message' => 'Employee updated successfully',
            'employee' => $employee,
            'redirect' => route('designation.index')
        ]);
    }


    public function destroy(Request $request, $id)
    {
        $employee->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Employee deleted successfully'
        ]);
    }
}
