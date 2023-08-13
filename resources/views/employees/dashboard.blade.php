@extends('layouts.app')

@section('content')
    <h2>Welcome to Employee Dashboard</h2>

    <div>
        <a href="{{ route('employee.submit-leave-request') }}">Submit Leave Request</a>
    </div>

    <div>
        <a href="{{ route('employee.leave-request-status') }}">View Leave Request Status</a>
    </div>
@endsection
