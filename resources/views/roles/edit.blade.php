<x-app-layout>


    
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center"
        style="background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">

        <!-- Header -->
        <div class="mb-4 text-center text-white">
            <h2 class="display-5 fw-bold">
                {{ 'Edit Role' }}
            </h2>
            <p class="text-white small">Update role name and assign permissions</p>
        </div>

        <!-- Edit Form Card -->
        <div class="card shadow-lg rounded-4"
            style="max-width: 600px; width: 100%; backdrop-filter: blur(8px); background-color: rgba(255,255,255,0.85);">
            <div class="card-body p-5">

                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Role Name -->
                    <div class="mb-4">
                        <label for="roles" class="form-label fw-medium">Role Name</label>
                        <input type="text" id="roles" name="name" class="form-control form-control-lg"
                            placeholder="Enter Role Name" value="{{ old('name', $role->name) }}">
                        @error('name')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Permissions -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Assign Permissions</label>
                        <div class="d-flex flex-wrap gap-3 mt-2 border p-3 rounded-md bg-white">
                            @foreach ($permissions as $permission)
                                <div class="form-check me-3 mb-2">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                        id="perm_{{ $permission->id }}" class="form-check-input"
                                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                    <label for="perm_{{ $permission->id }}"
                                        class="form-check-label">{{ $permission->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('permissions')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex gap-2 flex-column flex-md-row">
                        <button type="submit" class="btn btn-success btn-lg fw-semibold w-100">
                            Update Role
                        </button>
                        <a href="{{ route('roles.index') }}" class="btn btn-primary btn-lg fw-semibold w-100">
                            Back to Roles
                        </a>
                    </div>

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif

                </form>

            </div>
        </div>

    </div>
</x-app-layout>
