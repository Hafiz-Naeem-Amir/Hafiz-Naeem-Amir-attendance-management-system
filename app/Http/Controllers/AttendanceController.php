<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // Show attendance page
    public function index()
    {
        $attendances = Attendance::with('employee')->latest()->get();
        return view('attendance-system.pages.attenance.index', compact('attendances'));
    }

    // Check in
    public function checkIn(Request $request)
    {
        $today = Carbon::today()->toDateString();

        $attendance = Attendance::firstOrCreate(
            [
                'emp_id' => Auth::user()->id,
                'date'   => $today,
            ],
            [
                'franchise_id' => Auth::user()->franchise_id,
                'check_in'     => Carbon::now()->format('H:i:s'),
            ]
        );

        return redirect()->back()->with('success', 'Checked in successfully!');
    }

    // Check out
    public function checkOut(Request $request)
    {
        $today = Carbon::today()->toDateString();

        $attendance = Attendance::where('emp_id', Auth::user()->id)
            ->where('date', $today)
            ->first();

        if ($attendance && !$attendance->check_out) {
            $attendance->update(['check_out' => Carbon::now()->format('H:i:s')]);
            return redirect()->back()->with('success', 'Checked out successfully!');
        }

        return redirect()->back()->with('error', 'You already checked out today or not checked in yet.');
    }
}
