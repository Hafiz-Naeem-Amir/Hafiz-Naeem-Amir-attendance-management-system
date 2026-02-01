<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <!-- Profile Picture -->
                        <img src="https://via.placeholder.com/100" alt="Profile Picture" class="rounded-circle me-3" width="100" height="100">
                        <div>
                            <!-- Basic Info -->
                            <h4 class="card-title" id="employeeName">John Doe</h4>
                            <p class="mb-1"><strong>Employee ID:</strong> <span id="employeeID">EMP123</span></p>
                            <p class="mb-1"><strong>Designation:</strong> <span id="designation">Software Engineer</span></p>
                            <p class="mb-1"><strong>Department:</strong> <span id="department">IT</span></p>
                        </div>
                    </div>

                    <hr>

                    <!-- Contact Info -->
                    <h5>Contact Information</h5>
                    <p class="mb-1"><strong>Email:</strong> <span id="email">john.doe@example.com</span></p>
                    <p class="mb-1"><strong>Phone:</strong> <span id="phone">+92 300 1234567</span></p>

                    <hr>

                    <!-- Attendance Info -->
                    <h5>Today's Attendance</h5>
                    <p class="mb-1"><strong>Check-in Time:</strong> <span id="checkInTime">09:00 AM</span></p>
                    <p class="mb-1"><strong>Status:</strong> <span id="status" class="badge bg-success">Checked In</span></p>
                    <p class="mb-1"><strong>Shift Timing:</strong> <span id="shift">09:00 AM - 05:00 PM</span></p>

                    <hr>

                    <!-- Optional Info -->
                    <h5>Additional Info</h5>
                    <p class="mb-1"><strong>Manager:</strong> <span id="manager">Jane Smith</span></p>
                    <p class="mb-1"><strong>Joining Date:</strong> <span id="joiningDate">01-Jan-2022</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('employee_id')->unique();
            $table->string('designation');
            $table->string('department');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('shift')->nullable();
            $table->string('manager')->nullable();
            $table->date('joining_date')->nullable();
            $table->time('check_in_time')->nullable();
            $table->enum('status', ['Checked In', 'Checked Out'])->default('Checked Out');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};





<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'employee_id',
        'designation',
        'department',
        'email',
        'phone',
        'profile_image',
        'shift',
        'manager',
        'joining_date',
        'check_in_time',
        'status'
    ];
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    // Show profile after check-in
    public function showProfile($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.profile', compact('employee'));
    }

    // Check-in employee
    public function checkIn(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->check_in_time = Carbon::now()->format('H:i:s');
        $employee->status = 'Checked In';
        $employee->save();

        return redirect()->route('employee.profile', $employee->id)
                         ->with('success', 'Check-in successful!');
    }

    // Check-out employee
    public function checkOut(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->status = 'Checked Out';
        $employee->save();

        return redirect()->route('employee.profile', $employee->id)
                         ->with('success', 'Checked out successfully!');
    }
}



use App\Http\Controllers\EmployeeController;

Route::get('/employee/{id}', [EmployeeController::class, 'showProfile'])->name('employee.profile');
Route::post('/employee/checkin/{id}', [EmployeeController::class, 'checkIn'])->name('employee.checkin');
Route::post('/employee/checkout/{id}', [EmployeeController::class, 'checkOut'])->name('employee.checkout');






@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ $employee->profile_image ?? 'https://via.placeholder.com/100' }}"
                             alt="Profile Picture" class="rounded-circle me-3" width="100" height="100">
                        <div>
                            <h4 class="card-title">{{ $employee->name }}</h4>
                            <p class="mb-1"><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
                            <p class="mb-1"><strong>Designation:</strong> {{ $employee->designation }}</p>
                            <p class="mb-1"><strong>Department:</strong> {{ $employee->department }}</p>
                        </div>
                    </div>

                    <hr>

                    <h5>Contact Information</h5>
                    <p class="mb-1"><strong>Email:</strong> {{ $employee->email }}</p>
                    <p class="mb-1"><strong>Phone:</strong> {{ $employee->phone }}</p>

                    <hr>

                    <h5>Today's Attendance</h5>
                    <p class="mb-1"><strong>Check-in Time:</strong> {{ $employee->check_in_time ?? 'Not Checked In' }}</p>
                    <p class="mb-1">
                        <strong>Status:</strong>
                        <span class="badge {{ $employee->status == 'Checked In' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $employee->status }}
                        </span>
                    </p>
                    <p class="mb-1"><strong>Shift Timing:</strong> {{ $employee->shift }}</p>

                    <hr>

                    <h5>Additional Info</h5>
                    <p class="mb-1"><strong>Manager:</strong> {{ $employee->manager }}</p>
                    <p class="mb-1"><strong>Joining Date:</strong> {{ $employee->joining_date }}</p>

                    <hr>

                    <form action="{{ route('employee.checkin', $employee->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-primary" {{ $employee->status == 'Checked In' ? 'disabled' : '' }}>Check In</button>
                    </form>

                    <form action="{{ route('employee.checkout', $employee->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-warning" {{ $employee->status == 'Checked Out' ? 'disabled' : '' }}>Check Out</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection






@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ $employee->profile_image ?? 'https://via.placeholder.com/100' }}"
                             alt="Profile Picture" class="rounded-circle me-3" width="100" height="100">
                        <div>
                            <h4 class="card-title" id="employeeName">{{ $employee->name }}</h4>
                            <p class="mb-1"><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
                            <p class="mb-1"><strong>Designation:</strong> {{ $employee->designation }}</p>
                            <p class="mb-1"><strong>Department:</strong> {{ $employee->department }}</p>
                        </div>
                    </div>

                    <hr>

                    <h5>Today's Attendance</h5>
                    <p class="mb-1"><strong>Check-in Time:</strong> <span id="checkInTime">{{ $employee->check_in_time ?? 'Not Checked In' }}</span></p>
                    <p class="mb-1"><strong>Status:</strong>
                        <span id="status" class="badge {{ $employee->status == 'Checked In' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $employee->status }}
                        </span>
                    </p>

                    <hr>

                    <button id="checkInBtn" class="btn btn-primary" {{ $employee->status == 'Checked In' ? 'disabled' : '' }}>Check In</button>
                    <button id="checkOutBtn" class="btn btn-warning" {{ $employee->status == 'Checked Out' ? 'disabled' : '' }}>Check Out</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (for AJAX) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function(){

    $('#checkInBtn').click(function(){
        $.ajax({
            url: "{{ route('employee.ajax.checkin', $employee->id) }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(response){
                if(response.status === 'success'){
                    $('#checkInTime').text(response.check_in_time);
                    $('#status').text(response.status_label).removeClass('bg-secondary').addClass('bg-success');
                    $('#checkInBtn').prop('disabled', true);
                    $('#checkOutBtn').prop('disabled', false);
                    Swal.fire('Success', response.message, 'success');
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }
        });
    });

    $('#checkOutBtn').click(function(){
        $.ajax({
            url: "{{ route('employee.ajax.checkout', $employee->id) }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(response){
                if(response.status === 'success'){
                    $('#status').text(response.status_label).removeClass('bg-success').addClass('bg-secondary');
                    $('#checkInBtn').prop('disabled', false);
                    $('#checkOutBtn').prop('disabled', true);
                    Swal.fire('Success', response.message, 'success');
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }
        });
    });

});
</script>
@endsection




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    // Show employee profile
    public function showProfile($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.profile', compact('employee'));
    }

    // AJAX Check-in
    public function ajaxCheckIn(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        if($employee->status === 'Checked In'){
            return response()->json(['status' => 'error', 'message' => 'Employee already checked in!']);
        }

        $employee->check_in_time = Carbon::now()->format('H:i:s');
        $employee->status = 'Checked In';
        $employee->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Check-in successful!',
            'check_in_time' => $employee->check_in_time,
            'status_label' => $employee->status
        ]);
    }

    // AJAX Check-out
    public function ajaxCheckOut(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        if($employee->status === 'Checked Out'){
            return response()->json(['status' => 'error', 'message' => 'Employee already checked out!']);
        }

        $employee->status = 'Checked Out';
        $employee->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Check-out successful!',
            'status_label' => $employee->status
        ]);
    }
}




use App\Http\Controllers\EmployeeController;

Route::get('/employee/{id}', [EmployeeController::class, 'showProfile'])->name('employee.profile');

Route::post('/employee/ajax/checkin/{id}', [EmployeeController::class, 'ajaxCheckIn'])->name('employee.ajax.checkin');
Route::post('/employee/ajax/checkout/{id}', [EmployeeController::class, 'ajaxCheckOut'])->name('employee.ajax.checkout');

