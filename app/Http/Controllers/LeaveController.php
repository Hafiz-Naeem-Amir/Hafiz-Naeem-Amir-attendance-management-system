<?php



namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Franchise;
use App\Models\User;
use App\Models\Employee;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {

        $franchises = Franchise::all();
        $users = User::all();
        $leaves = Leave::all();
        return view('attendance-system.pages.leave.show', compact('users', 'franchises', 'leaves'));
    }
    public function apply()
    {
        $employees = Employee::all();
        $franchises = Franchise::all();
        $users = User::all();
        return view('attendance-system.pages.leave.apply', compact('users', 'franchises', 'employees'));
    }
    public function store(Request $request)
    {
        $request->validate([
            // 'emp_id' => 'required|exists:users,emp_id',

            'franchise_id'  => 'required|exists:franchises,id',
            'type'          => 'required|string',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',

            'reason'        => 'nullable|string',
        ]);
        $days = Carbon::parse($request->start_date)
            ->diffInDays(Carbon::parse($request->end_date)) + 1;
        Leave::create([
            'emp_id'       => Auth::user()->emp_id,
            'franchise_id'  => $request->franchise_id,
            'type'          => $request->type,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,
            'days'         => $days,
            'reason'        => $request->reason,
        ]);

        return redirect()->back()->with('success', 'Leave request submitted successfully!');
    }
}
