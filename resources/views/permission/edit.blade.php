<x-app-layout>
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center"
        style="background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">

        <!-- Header -->
        <div class="mb-4 text-center text-white">
            <h2 class="display-5 fw-bold">
                {{ __('Edit Permission') }}
            </h2>
        </div>

        <!-- Edit Form Card -->
        <div class="card shadow-lg rounded-4"
            style="max-width: 500px; width: 100%; backdrop-filter: blur(8px); background-color: rgba(255,255,255,0.85);">
            <div class="card-body p-5">

                <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="permission" class="form-label fw-medium">Permission Name</label>
                        <input type="text" id="permission" name="name" class="form-control form-control-lg"
                               placeholder="Enter permission" value="{{ old('name', $permission->name) }}">

                        <!-- Validation Error -->
                        @error('name')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">
                            Update Permission
                        </button>
                    </div>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif
                </form>

            </div>
        </div>

    </div>
</x-app-layout>
