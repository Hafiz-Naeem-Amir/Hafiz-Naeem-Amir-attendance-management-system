@extends('layouts.admin')
@section('content')

<h4>Attendance</h4>

<form action="{{ route('attendance.checkin') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-success">Check In</button>
</form>

<form action="{{ route('attendance.checkout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Check Out</button>
</form>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Employee</th>
            <th>Date</th>
            <th>Check In</th>
            <th>Check Out</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendances as $att)
        <tr>
            <td>{{ $att->employee->name }}</td>
            <td>{{ $att->date }}</td>
            <td>{{ $att->check_in ?? 'N/A' }}</td>
            <td>{{ $att->check_out ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
