@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">

                {{-- Form --}}
                <form id="employeeForm" action="{{ isset($employee) ? route('employees.update', $employee->id) : route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($employee))
                    @method('PUT')
                    @endif

                    <div class="row">

                        {{-- LEFT COLUMN --}}
                        <div class="col-md-8">

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" name="emp_id" class="form-control" placeholder="Employee ID" value="{{ $employee->emp_id ?? '' }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Employee Name" value="{{ $employee->name ?? '' }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ $employee->phone ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Hire Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="hire_date" class="form-control" value="{{ $employee->hire_date ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Franchise</label>
                                <div class="col-sm-9">
                                    <select name="franchise_id" class="form-control" required>
                                        <option value="">-- Select Franchise --</option>
                                        @foreach($franchises as $franchise)
                                        <option value="{{ $franchise->id }}" {{ (isset($employee) && $employee->franchise_id == $franchise->id) ? 'selected' : '' }}>
                                            {{ $franchise->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Designation</label>
                                <div class="col-sm-9">
                                    <select name="designation_id" class="form-control">
                                        <option value="">-- Select Designation --</option>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}" {{ (isset($employee) && $employee->designation_id == $designation->id) ? 'selected' : '' }}>
                                            {{ $designation->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="1" {{ (isset($employee) && $employee->status == 1) ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ (isset($employee) && $employee->status == 0) ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="offset-sm-3">
                                    <button type="submit" class="btn btn-success" id="saveBtn">
                                        <i class="mdi mdi-plus"></i> {{ isset($employee) ? 'Update Employee' : 'Save Employee' }}
                                    </button>
                                    <a href="{{ route('employees.index') }}" class="btn btn-warning">Cancel</a>
                                </div>
                            </div>

                        </div>

                        {{-- RIGHT COLUMN: Photo --}}
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="mb-3 border rounded p-3" style="height:250px; display:flex; align-items:center; justify-content:center;">
                                        <img id="photoPreview" class="img-fluid" style="max-height:100%; object-fit:contain;" src="{{ isset($employee) && $employee->photo ? asset('storage/'.$employee->photo) : '' }}">
                                    </div>

                                    <input type="file" name="photo" id="photoInput" class="d-none" accept="image/*">
                                    <button type="button" class="btn btn-primary w-100" onclick="document.getElementById('photoInput').click()">
                                        Upload Photo
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <div id="ajaxResponse" class="mt-3"></div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        // Image Preview
        $('#photoInput').on('change', function() {
            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#photoPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        // AJAX Form Submission
        $('#employeeForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action')
                , type: 'PUT'
                , data: formData
                , contentType: false
                , processData: false
                , success: function(response) {
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success'
                        , html: response.message
                        , showConfirmButton: false
                        , timer: 1500
                        , timerProgressBar: true
                    }).then(() => {
                        // AJAX response میں جو redirect route server سے آیا ہے اسے handle کریں
                        if (response.redirect) {
                            window.location.href = response.redirect; // redirect یہاں ہوگا
                        }
                    });


                    $('#employeeForm')[0].reset();
                    $('#photoPreview').attr('src', '');

                }
                , error: function(xhr) {
                    let errors = xhr.responseJSON ? xhr.responseJSON.errors : null;
                    let errorHtml = '';
                    if (errors) {
                        errorHtml = '<ul style="text-align:left;">';
                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul>';
                    } else {
                        errorHtml = xhr.responseText;
                    }
                    Swal.fire({
                        icon: 'error'
                        , title: 'Error'
                        , html: errorHtml
                    });
                }
            });
        });

    });

</script>

@endsection
