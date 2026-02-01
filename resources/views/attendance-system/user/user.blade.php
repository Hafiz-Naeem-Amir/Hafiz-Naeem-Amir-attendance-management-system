@extends('layouts.admin')
@section('content')
{{-- User Table --}}
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->status)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                                <td>
                                    @can('edit users')

                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @endcan
                                    @can('delete users')


                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
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
