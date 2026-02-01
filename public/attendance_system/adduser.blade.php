<div class="min-vh-100 py-5"
        style="background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">

        <!-- Header -->
        <div class="text-center text-white mb-4">
            <h2 class="display-5 fw-bold">User List</h2>
            <p class="small">Manage system users & roles</p>
        </div>

        <!-- Main Card -->
        <div class="card shadow-lg rounded-4 mx-auto"
            style="max-width: 1200px; width: 95%; background: rgba(255,255,255,0.95);">

            <!-- Card Header -->
            <div class="card-body border-bottom d-flex justify-content-between align-items-center">
                <div>
                    <strong>User List</strong><br>
                    <small class="text-muted">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </small>
                </div>

                <button class="btn btn-success btn-fw" type="button" id="toggleUserCreate">
                    <i class="mdi mdi-account-plus"></i> Add New User
                </button>
            </div>

            <!-- Card Body -->
            <div class="card-body">

                <!-- Top Controls -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="small">
                            Show
                            <select class="form-select form-select-sm d-inline-block w-auto"
                                wire:model="perPage">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries
                        </label>
                    </div>

                    <div class="col-md-6 text-end">
                        <input type="text"
                            class="form-control form-control-sm w-75 d-inline-block"
                            placeholder="Search by name, email..."
                            wire:model.debounce.300ms="search">
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>
                                    <a href="#" wire:click.prevent="sortBy('name')">
                                        Name
                                    </a>
                                </th>
                                <th>
                                    <a href="#" wire:click.prevent="sortBy('email')">
                                        Email
                                    </a>
                                </th>
                                <th>
                                    <a href="#" wire:click.prevent="sortBy('status')">
                                        Status
                                    </a>
                                </th>
                                <th width="180">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}"
                                           class="btn btn-sm btn-primary">
                                            Edit
                                        </a>

                                        <form action="{{ route('users.destroy', $user->id) }}"
                                              method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        No users found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </div>
