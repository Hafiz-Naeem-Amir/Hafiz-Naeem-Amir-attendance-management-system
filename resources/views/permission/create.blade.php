@extends('layouts.admin')
@section('content')
<!-- Form Card -->
<div class="card shadow-lg rounded-4" style="max-width: 500px; width: 100%; backdrop-filter: blur(8px); background-color: rgba(255,255,255,0.85);">
    <div class="card-body p-5">

        <!-- Add Permission Form -->
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="permission" class="form-label fw-medium">Permission</label>
                <input type="text" id="permission" name="name" class="form-control form-control-lg" placeholder="Enter permission" value="{{ old('name') }}">

                <!-- Validation Error -->
                @error('name')
                <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-lg fw-semibold">
                    Add Permission
                </button>

                <!-- View All Permissions Button -->
                <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-lg fw-semibold">
                    View All Permissions
                </a>
            </div>

            <!-- Success Message -->
            @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
        </form>

    </div>
</div>
@endsection
