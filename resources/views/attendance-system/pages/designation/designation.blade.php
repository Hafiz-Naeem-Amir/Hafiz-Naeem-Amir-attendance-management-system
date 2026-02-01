@extends('layouts.admin')
@section('content')
<div class="row" bis_skin_checked="1">
    <div class="col-md-12 grid-margin" bis_skin_checked="1">
        <div class="card" bis_skin_checked="1">
            <div class="card-body sticky-breadcrumb" bis_skin_checked="1">
                <div class="bcca-breadcrumb float-left" bis_skin_checked="1">
                    <div class="bcca-breadcrumb-item" bis_skin_checked="1">Designation</div>
                    <div class="bcca-breadcrumb-item" bis_skin_checked="1">
                        <a href="dashboard">Dashboard</a>
                    </div>
                </div>

                <div class="float-right breadcrumb-external-button" bis_skin_checked="1">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" bis_skin_checked="1">
    <div class="col-lg-5 grid-margin" bis_skin_checked="1">
        <div wire:id="ehfV8HnaB60o6iEmABOA" class="card" bis_skin_checked="1">
            <div class="card-body" bis_skin_checked="1">
                <h4 class="card-title">Create New Designation</h4>
                <p class="card-description"> </p>
                {{-- Success message --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ isset($editDesignation) 
                      ? route('designation.update', $editDesignation->id) 
                      : route('designation.store') }}" method="POST" class="forms-sample">

                    @csrf
                    @if(isset($editDesignation))
                    @method('PUT')
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="{{ old('name', $editDesignation->name ?? '') }}" placeholder="Name..." required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-3">
                            <button type="submit" class="btn btn-success btn-fw">
                                @if(isset($editDesignation))
                                <i class="mdi mdi-content-save"></i> Update
                                @else
                                <i class="mdi mdi-plus-box-outline"></i> Create
                                @endif
                            </button>

                            @if(isset($editDesignation))
                            <a href="{{ route('designation.index') }}" class="btn btn-secondary btn-fw">
                                Cancel
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-7 grid-margin" bis_skin_checked="1">
        <div wire:id="mSkOjYCpdjxuSIX3bZii" class="card" wire:init="$set('readyToLoad', 'true')" bis_skin_checked="1">
            <div class="card-body" bis_skin_checked="1">
                <h4 class="card-title"></h4>
                <div class="row" bis_skin_checked="1">
                    <div class="table-responsive">
                        <table id="users-table" class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($designations as $desig)
                                <tr>
                                    <td>{{ $desig->id }}</td>
                                    <td>{{ $desig->name }}</td>

                                    <td>
                                        <a href="{{ route('designation.edit', $desig->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('designation.destroy', $desig->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#users-table').DataTable({
            "paging": true
            , "searching": true
            , "ordering": true
            , "info": true
            , "lengthChange": true
            , "pageLength": 5
        });
    });

</script>
@endsection
