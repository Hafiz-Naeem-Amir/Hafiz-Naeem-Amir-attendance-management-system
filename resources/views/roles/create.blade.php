@extends('layouts.admin')

@section('content')
<div class="card ">
    <div class="text-center text-white py-1 bg-success bg-opacity-75 rounded-top">
        <h2 class="fw-bold">Roles</h2>
    </div>
    <div class="card-body p-1">

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <!-- Role Name -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Role Name</label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Role Name" value="{{ old('name') }}" required>
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Permissions -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Assign Permissions</label>

                <div class="border rounded p-3" style="max-height: 150px; overflow-y: auto;">
                    <div class="row g-3">
                        @foreach ($permissions as $permission)
                        <div class="col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}">
                                <label class="form-check-label" for="perm{{ $permission->id }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


                @error('permissions')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="row g-2">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success btn-lg w-100">
                        Create Role
                    </button>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-lg w-100">
                        View Roles
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-warning btn-lg w-100">
                        Create Permission
                    </a>
                </div>
            </div>

            <!-- Success -->
            @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
            @endif

        </form>

    </div>
</div>
@endsection
