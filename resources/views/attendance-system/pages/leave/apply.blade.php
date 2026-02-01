@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body sticky-breadcrumb">
                <div class="bcca-breadcrumb float-left">
                    <div class="bcca-breadcrumb-item">Apply</div>
                    <div class="bcca-breadcrumb-item">
                        <a href="https://www.kingpabel.com/attendance-management-system/leave">Leave</a>
                    </div>
                    <div class="bcca-breadcrumb-item">
                        <a href="dashboard">Dashboard</a>
                    </div>
                </div>

                <div class="float-right breadcrumb-external-button">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">


    <!-- Left Side: Form -->
    <div class="col-lg-7 grid-margin">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('leaves.store') }}" method="POST" class="forms-sample">
                    @csrf

                    <!-- Employee Select -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Employee</label>
                        <div class="col-sm-8">
                            <select name="emp_id" id="emp_id" class="form-control" required>
                                <option value="">Select Employee</option>
                                @foreach($users as $employee)
                                <option value="{{ $employee->id }}" data-name="{{ $employee->emp_id }}" data-photo="{{ $employee->photo ? asset('images/'.$employee->photo) : asset('images/default.png') }}">
                                    {{ $employee->emp_id }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Franchise Select -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Franchise</label>
                        <div class="col-sm-8">
                            <select name="franchise_id" class="form-control" required>
                                <option value="">Select Franchise</option>
                                @foreach($franchises as $franchise)
                                <option value="{{ $franchise->id }}">
                                    {{ $franchise->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Leave Type -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Leave Type</label>
                        <div class="col-sm-8">
                            <select name="type" class="form-control" required>
                                <option value="">Select Leave Type</option>
                                <option value="Casual">Casual</option>
                                <option value="Sick">Sick</option>
                                <option value="Annual">Annual</option>
                                <option value="Maternity">Maternity</option>
                                <option value="Paternity">Paternity</option>
                                <option value="Bereavement">Bereavement</option>
                                <option value="Half Day">Half Day</option>
                                <option value="Study">Study</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Optional">Optional</option>
                            </select>
                        </div>
                    </div>

                    <!-- Start Date -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Start Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="start_date" class="form-control" required>
                        </div>
                    </div>

                    <!-- End Date -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">End Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="end_date" class="form-control" required>
                        </div>
                    </div>

                    <!-- Reason -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Reason</label>
                        <div class="col-sm-8">
                            <textarea name="reason" class="form-control" placeholder="Enter reason (optional)"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="btn btn-success btn-fw">
                                Apply
                            </button>
                        </div>
                    </div>

                </form>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success'
                        , text: "{{ session('success') }}"
                        , confirmButtonColor: '#3085d6'
                    });

                </script>
                @endif

                @if($errors->any())
                <script>
                    Swal.fire({
                        icon: 'error'
                        , title: 'Validation Error'
                        , html: `{!! implode('<br>', $errors->all()) !!}`
                        , confirmButtonColor: '#d33'
                    });

                </script>
                @endif


            </div>
        </div>
    </div>

    <!-- Right Side: Employee Picture & Name -->
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body text-center">
                <img id="emp_photo_display" src="{{ asset('images/default.png') }}" alt="Employee Image" class="rounded-circle" width="150">
                <h5 id="emp_name_display" class="mt-2">Employee Name</h5>
            </div>
        </div>
    </div>



</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('emp_id').addEventListener('change', function() {
        var selected = this.options[this.selectedIndex];
        var name = selected.getAttribute('data-name');
        var photo = selected.getAttribute('data-photo') || 'default.png';

        // Update right-side card
        document.getElementById('emp_name_display').textContent = name || 'Employee Name';
        document.getElementById('emp_photo_display').src = photo;
    });

</script>
@endsection
