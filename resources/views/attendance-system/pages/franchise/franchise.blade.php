@extends('layouts.admin')
@section('content')
{{-- <!-- User Modal -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content shadow rounded-3">

            <!-- Header -->
            <div class="modal-header bg-primary text-white py-2">
                <h6 class="modal-title" id="userModalTitle">Create User</h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <form id="userForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="formMethod" value="POST">

                    <div class="row">
                        <!-- LEFT -->
                        <div class="col-md-7">

                            <div class="mb-2">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control form-control-sm">
                            </div>

                            <div class="mb-2">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control form-control-sm">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Confirm</label>
                                    <input type="password" name="password_confirmation" class="form-control form-control-sm">
                                </div>
                            </div>

                            <button class="btn btn-outline-secondary btn-sm mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#advancedSettings">
                                More Options
                            </button>

                            <div class="collapse" id="advancedSettings">

                                <div class="mb-2">
                                    <label>Designation</label>
                                    <select name="designation_id" class="form-control form-control-sm">
                                        <option value="">Select</option>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
@endforeach
</select>
</div>

<div class="mb-2">
    <label>Status</label>
    <select name="status" class="form-control form-control-sm">
        <option value="1">Enabled</option>
        <option value="0">Disabled</option>
    </select>
</div>

<div class="mb-2">
    <label>Roles</label>
    <div class="row">
        @foreach($roles as $role)
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input role-checkbox" type="checkbox" value="{{ $role->name }}" name="roles[]">
                <label class="form-check-label">{{ $role->name }}</label>
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>
</div>

<!-- RIGHT -->
<div class="col-md-5">
    <div class="card">
        <div class="card-body text-center p-2">
            <h6>Profile Image</h6>
            <div class="border rounded mb-2" style="height:150px">
                <img id="imagePreview" class="img-fluid h-100" style="object-fit:contain">
            </div>
            <input type="file" name="profile_image" id="profileImage" class="d-none">
            <button type="button" class="btn btn-sm btn-primary w-100" onclick="$('#profileImage').click()">
                Upload
            </button>
        </div>
    </div>
</div>
</div>

</form>
</div>

<!-- Footer -->
<div class="modal-footer py-2">
    <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
    <button class="btn btn-sm btn-success" id="saveUserBtn">Save</button>
</div>

</div>
</div>
</div> --}}


{{-- Franchise Table --}}
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="franchise-table" class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Franchise Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($franchises as $franchise)
                            <tr>
                                <td>{{ $franchise->id }}</td>
                                <td>{{ $franchise->name }}</td>
                                <td>{{ $franchise->email }}</td>
                                <td>
                                    @if ($franchise->status)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:void(0)" data-id="{{ $franchise->id }}" class="btn btn-sm btn-primary editFranchiseBtn">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('franchise.destroy', $franchise->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- DataTables --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#users-table').DataTable();

        // Open modal and fill data for edit
        // Open modal and fill data for edit
        $('.editUserBtn').click(function() {
            let id = $(this).data('id');

            // Use singular 'user' to match Laravel route
            $.get('/user/' + id + '/edit', function(res) {
                $('#userModalTitle').text('Edit User');
                $('#userForm').attr('action', '/user/' + id); // singular 'user'
                $('#formMethod').val('PUT');

                $('input[name="name"]').val(res.user.name);
                $('input[name="email"]').val(res.user.email);
                $('select[name="designation_id"]').val(res.user.designation_id);
                $('select[name="status"]').val(res.user.status);

                $('.role-checkbox').prop('checked', false);
                res.roles.forEach(r => {
                    $('input[value="' + r + '"]').prop('checked', true);
                });

                $('#imagePreview').attr('src', res.user.profile_image_url || '');

                $('#userModal').modal('show');

                // Auto-expand More Options when editing
                $('#advancedSettings').addClass('show');
            });
        });

        // AJAX form submit
        $('#saveUserBtn').click(function(e) {
            e.preventDefault();
            let form = $('#userForm')[0];
            let formData = new FormData(form);
            let actionUrl = $('#userForm').attr('action');

            if ($('#formMethod').val() === 'PUT') {
                formData.append('_method', 'PUT');
            }

            $.ajax({
                url: actionUrl
                , type: 'POST'
                , data: formData
                , processData: false
                , contentType: false
                , success: function(res) {
                    alert(res.message);
                    $('#userModal').modal('hide');
                    location.reload();
                }
                , error: function(err) {
                    alert('Validation error!');
                }
            });
        });


        // AJAX form submit
        $('#saveUserBtn').click(function(e) {
            e.preventDefault();
            let form = $('#userForm')[0];
            let formData = new FormData(form);
            let actionUrl = $('#userForm').attr('action');

            if ($('#formMethod').val() === 'PUT') {
                formData.append('_method', 'PUT');
            }

            $.ajax({
                url: actionUrl
                , type: 'POST'
                , data: formData
                , processData: false
                , contentType: false
                , success: function(res) {
                    alert(res.message);
                    $('#userModal').modal('hide');
                    location.reload();
                }
                , error: function(err) {
                    alert('Validation error!');
                }
            });
        });

        // Image preview
        $('#profileImage').change(function() {
            const [file] = this.files;
            if (file) {
                $('#imagePreview').attr('src', URL.createObjectURL(file));
            }
        });
    });

</script>
@endsection
