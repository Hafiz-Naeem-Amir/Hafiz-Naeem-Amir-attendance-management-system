<x-app-layout>
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center" style="background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">

        <!-- Header -->
        <div class="mb-4 text-center text-white">
            <h2 class="display-5 fw-bold">Edit User</h2>
            <p class="small">Update user details and assign Roles</p>
        </div>

        <!-- Card -->
        <div class="card shadow-lg rounded-4" style="max-width: 900px; width: 95%; background: rgba(255,255,255,0.95);">
            <div class="card-body p-5">

                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- User Name -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">User Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name', $user->name) }}" placeholder="Enter user name">
                        @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email', $user->email) }}" placeholder="Enter email">
                        @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter new password (leave blank to keep old)">
                        @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password">
                    </div>

                    <!-- Roles -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label fw-medium mb-0">Assign Roles</label>
                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-outline-primary">
                                + Create Permission
                            </a>
                        </div>

                        <div class="row">
                            @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="role[]" value="{{ $role->id }}" {{ $user->roles->contains('id', $role->id) ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    {{ $role->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>


                        @error('role')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex gap-2 flex-column flex-md-row">
                        <button class="btn btn-success btn-lg w-100">Update User</button>
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg w-100">
                            View Users
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
