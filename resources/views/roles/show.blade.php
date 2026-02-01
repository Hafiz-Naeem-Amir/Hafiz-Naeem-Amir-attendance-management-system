@extends('layouts.admin')
@section('content')
    <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">All Roles</h4>
            <!-- Add Role Button -->
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Add Role
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th>Role Name</th>
                            <th>Permissions</th>
                            <th style="width: 15%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach ($role->permissions as $permission)
                                        <span class="badge bg-info text-dark me-1 mb-1">{{ $permission->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary me-1"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                        class="d-inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this role?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No roles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
