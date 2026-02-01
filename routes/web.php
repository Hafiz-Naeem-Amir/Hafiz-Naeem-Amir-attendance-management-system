<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;

// Root
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');
// })->middleware(['auth', 'verified', 'role:admin|super-admin'])->name('dashboard');

// Protected Routes for authenticated users with admin roles
// Route::middleware(['auth', 'verified', 'role:admin|super-admin'])->group(function () {
// Route::middleware(['auth', 'verified', 'role:admin|super-admin'])->group(function () {
Route::middleware(['auth', 'verified',])->group(function () {

    // User Routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('users/upload-image', [UserController::class, 'uploadImage'])->name('users.upload.image');
    Route::post('users/delete-image', [UserController::class, 'deleteImage'])->name('users.delete.image');
    // Designation Route
    Route::get('/designation', [DesignationController::class, 'index'])->name('designation.index');
    Route::post('/designation/store', [DesignationController::class, 'store'])->name('designation.store');
    Route::get('/designation/{id}/edit', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::put('/designation/{id}', [DesignationController::class, 'update'])->name('designation.update');
    Route::delete('/designation/{id}', [DesignationController::class, 'destroy'])->name('designation.destroy');

    // Roles Routes
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}', [RolesController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');

    // Permission Routes
    Route::get('/permission/index', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permission/store', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permission/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('/permission/{permission}/update', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/permission/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('franchises', [FranchiseController::class, 'index'])->name('franchises.index');
    Route::get('franchise/create', [FranchiseController::class, 'create'])->name('franchises.create');
    Route::post('franchise/store', [FranchiseController::class, 'store'])->name('franchises.store');
    Route::get('franchise/{id}/edit', [FranchiseController::class, 'edit'])->name('franchise.edit');
    Route::put('franchise/{id}', [FranchiseController::class, 'update'])->name('franchise.update');
    Route::delete('franchise/{id}', [FranchiseController::class, 'destroy'])->name('franchise.destroy');

    Route::get('employee', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('employee/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('employee/store', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('employee/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('employee/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


    Route::get('leaves', [LeaveController::class, 'index'])->name('leaves.index');
    Route::get('leaves/apply', [LeaveController::class, 'apply'])->name('leaves.apply');
    Route::post('leaves/store', [LeaveController::class, 'store'])->name('leaves.store');

    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
    Route::post('/attendance/check-in', [AttendanceController::class, 'checkIn'])->name('attendance.checkin');
    Route::post('/attendance/check-out', [AttendanceController::class, 'checkOut'])->name('attendance.checkout');
});

// Auth routes
require __DIR__ . '/auth.php';
