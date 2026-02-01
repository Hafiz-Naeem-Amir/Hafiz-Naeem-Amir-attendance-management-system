<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;

class FranchiseController extends Controller
{
    public function index()
    {
        $franchises = Franchise::all();
        return view('attendance-system.pages.franchise.franchise', compact('franchises'));
    }
    public function create()
    {
        return view('attendance-system.pages.franchise.Add_franchise');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'status'  => 'required|boolean',
            'logo'    => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('franchises', 'public');
        }

        Franchise::create($data);

        return response()->json([
            'message' => 'Franchise created successfully!'
        ]);
    }
}
