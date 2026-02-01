@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="employees-table" class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Employee ID</th>
                                    <th>Employee Name</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Franchise</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->emp_id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->designation->name ?? 'N/A' }}</td>
                                    <td>{{ $employee->franchise->name ?? 'N/A' }}</td>
                                    <td>{{ $employee->status }}</td>
                                    <td>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary me-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
                                    <td colspan="7" class="text-center text-muted">No employees found.</td>
                                </tr>
                                @endforelse
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



</div>

<script>
    $(document).ready(function() {
        $('#employees-table').DataTable(); // Table ID should match
    });

</script>

@endsection
