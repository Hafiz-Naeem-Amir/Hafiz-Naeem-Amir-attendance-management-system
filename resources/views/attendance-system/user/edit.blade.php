@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form id="userForm" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($user))
                    @method('PUT')
                    @endif

                    <div class="row">
                        {{-- Left Column --}}
                        <div class="col-md-8">
                            {{-- Employee ID --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" name="emp_id" class="form-control" value="{{ $user->emp_id ?? old('emp_id') }}" readonly>
                                </div>
                            </div>

                            {{-- Employee Name --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Employee Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{ $user->name ?? old('name') }}" placeholder="Employee Name" required>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" value="{{ $user->email ?? old('email') }}" placeholder="Email..." required>
                                </div>
                            </div>

                            {{-- Password --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" placeholder="{{ isset($user) ? 'Leave blank to keep current' : 'Password...' }}">
                                </div>
                            </div>

                            {{-- Confirm Password --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Re-type Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-type Password...">
                                </div>
                            </div>

                            {{-- More Options Toggle --}}
                            <div class="form-group row mb-3">
                                <div class="offset-sm-3">
                                    <button class="btn btn-outline-danger btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#advancedSettings" aria-expanded="false" aria-controls="advancedSettings">
                                        More Options <span>▼</span>
                                    </button>
                                </div>
                            </div>

                            {{-- Advanced Section --}}
                            <div class="collapse mt-3" id="advancedSettings">
                                {{-- Phone --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" value="{{ $user->phone ?? old('phone') }}" placeholder="Phone Number">
                                    </div>
                                </div>

                                {{-- Hire Date --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Hire Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="hire_date" class="form-control" value="{{ isset($user->hire_date) ? \Carbon\Carbon::parse($user->hire_date)->format('Y-m-d') : '' }}">
                                    </div>
                                </div>

                                {{-- Designation --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Designation</label>
                                    <div class="col-sm-9">
                                        <select name="designation_id" class="form-control">
                                            <option value="">Select Designation</option>
                                            @foreach ($designations as $designation)
                                            <option value="{{ $designation->id }}" {{ isset($user) && $user->designation_id == $designation->id ? 'selected' : '' }}>
                                                {{ $designation->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Franchise --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Franchise</label>
                                    <div class="col-sm-9">
                                        <select name="franchise_id" class="form-control" required>
                                            <option value="">-- Select Franchise --</option>
                                            @foreach($franchises as $franchise)
                                            <option value="{{ $franchise->id }}" {{ isset($user) && $user->franchise_id == $franchise->id ? 'selected' : '' }}>
                                                {{ $franchise->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-control">
                                            <option value="1" {{ isset($user) && $user->status ? 'selected' : '' }}>Enabled</option>
                                            <option value="0" {{ isset($user) && !$user->status ? 'selected' : '' }}>Disabled</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- Roles --}}
                                <div class="form-group row mb-3">
                                    <label class="col-sm-3 col-form-label text-end">Roles</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            @foreach ($roles as $role)
                                            <div class="col-md-4 col-sm-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->name }}" id="role{{ $role->id }}" {{ isset($user) && $user->roles->pluck('name')->contains($role->name) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="role{{ $role->id }}">{{ $role->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="form-group row mt-4">
                                <div class="offset-sm-3">
                                    <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Create' }}</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-warning">Cancel</a>
                                    <a href="{{ route('permissions.create') }}" class="btn btn-outline-primary btn-sm">+ Create Permission</a>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column: Profile Image --}}
                        <div class="col-md-4 d-flex align-items-start">
                            <div class="card w-100">
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-1">Profile Picture</h6>
                                    <div class="mb-3" style="height: 200px; display:flex; align-items:center; justify-content:center; background-color:#f8f9fa; overflow:hidden;">
                                        <img id="imagePreview" src="{{ isset($user) && $user->profile_image ? asset('storage/'.$user->profile_image) : '' }}" class="img-fluid" style="max-height:100%; object-fit:contain;">
                                    </div>
                                    <input type="file" name="profile_image" id="profileImage" class="d-none" accept="image/*">
                                    <button type="button" class="btn btn-primary w-100" onclick="document.getElementById('profileImage').click()">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- Bootstrap 5 JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- Custom JavaScript for Image Preview --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // More Options Toggle Arrow
        const collapseEl = document.getElementById('advancedSettings');
        const arrow = document.getElementById('moreOptionsArrow');

        if (collapseEl && arrow) {
            collapseEl.addEventListener('show.bs.collapse', function() {
                arrow.textContent = '▲';
            });

            collapseEl.addEventListener('hide.bs.collapse', function() {
                arrow.textContent = '▼';
            });
        }

        // Image Upload and Preview
        const profileImageInput = document.getElementById('profileImage');
        const imagePreview = document.getElementById('imagePreview');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const removeImageBtn = document.getElementById('removeImageBtn');

        if (profileImageInput) {
            profileImageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file) {
                    if (file.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB');
                        this.value = '';
                        return;
                    }

                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreviewContainer.style.backgroundColor = 'transparent';
                        removeImageBtn.classList.remove('d-none');
                    }

                    reader.readAsDataURL(file);
                }
            });
        }

        // Remove Image
        if (removeImageBtn) {
            removeImageBtn.addEventListener('click', function() {
                profileImageInput.value = '';
                imagePreview.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23e9ecef'/%3E%3Ctext x='50' y='50' text-anchor='middle' dy='.3em' fill='%236c757d'%3ENo Image%3C/text%3E%3C/svg%3E";
                imagePreviewContainer.style.backgroundColor = '#f8f9fa';
                this.classList.add('d-none');
            });
        }
    });

</script>

<style>
    #imagePreviewContainer {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    #imagePreviewContainer:hover {
        border-color: #0d6efd !important;
        background-color: #e7f1ff !important;
    }

</style>
<script>
    $(document).ready(function() {
        $('#profileImage').on('change', function(e) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        // AJAX submit
        $('#userForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: $(this).attr('action')
                , type: "{{ isset($user) ? 'POST' : 'POST' }}", // Laravel PUT handled by @method('PUT')
                data: formData
                , processData: false
                , contentType: false
                , success: function(response) {
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success'
                        , text: response.message
                        , timer: 1500
                        , showConfirmButton: false
                    }).then(() => {
                        window.location.href = "{{ route('users.index') }}"; // redirect after update
                    });
                }
                , error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let html = '<ul>';
                    $.each(errors, function(k, v) {
                        html += '<li>' + v[0] + '</li>';
                    });
                    html += '</ul>';
                    Swal.fire({
                        icon: 'error'
                        , title: 'Error'
                        , html: html
                    });
                }
            });
        });
    });

</script>
@endsection
