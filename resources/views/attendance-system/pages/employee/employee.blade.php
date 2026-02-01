@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">

                {{-- Form --}}
                <form id="employeeForm" action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        {{-- LEFT COLUMN --}}
                        <div class="col-md-8">

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" name="emp_id" class="form-control" placeholder="Employee ID" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Employee Name" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Hire Date</label>
                                <div class="col-sm-9">
                                    <input type="date" name="hire_date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Franchise</label>
                                <div class="col-sm-9">
                                    <select name="franchise_id" class="form-control" required>
                                        <option value="">-- Select Franchise --</option>
                                        @foreach($franchises as $franchise)
                                        <option value="{{ $franchise->id }}">{{ $franchise->name }}</option>
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
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="offset-sm-3">
                                    <button type="submit" class="btn btn-success" id="saveBtn">
                                        <i class="mdi mdi-plus"></i> Save Employee
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
                                        <img id="photoPreview" class="img-fluid" style="max-height:100%; object-fit:contain;">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                url: $(this).attr('action'), // safer than hardcoding
                type: "POST"
                , data: formData
                , contentType: false
                , processData: false
                , success: function(response) {
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success'
                        , html: '' + response.message + '</p>'
                        , showConfirmButton: false
                        , timer: 1500
                        , timerProgressBar: true
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
