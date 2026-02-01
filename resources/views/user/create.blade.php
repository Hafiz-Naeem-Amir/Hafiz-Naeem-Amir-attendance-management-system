<x-app-layout>
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center" style="background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">

        <!-- Header -->
        <div class="mb-4 text-center text-white">
            <h2 class="display-5 fw-bold">Create User</h2>
            <p class="small">Create new user and assign Roles</p>
        </div>

        <!-- Card -->
        <div class="card shadow-lg rounded-4" style="max-width: 900px; width: 95%; background: rgba(255,255,255,0.95);">
            <div class="card-body p-5">

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf

                    <!-- User Name -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">User Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name') }}" placeholder="Enter user name">
                        @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" placeholder="Enter email">
                        @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password">
                        @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password">
                    </div>


                    <!-- Permissions -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label fw-medium mb-0">Asign Roles</label>
                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-outline-primary">
                                + Create Permission
                            </a>
                        </div>

                        <div class="row">
                            @foreach ($roles as $role)
                            <div class="col-md-4 col-sm-6 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="{{ $role->id }}" id="perm{{ $role->id }}">
                                    <label class="form-check-label" for="perm{{ $role->id }}">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        @error('role')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex gap-2 flex-column flex-md-row">
                        <button class="btn btn-success btn-lg w-100">Create User</button>
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg w-100">
                            View Users
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
