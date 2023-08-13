@extends('layouts.admin')

@section('title', 'Approve Leave Request')

@section('content')
    <h2>Approve Leave Request</h2>

    <p>Are you sure you want to approve this leave request?</p>

    <form method="POST" action="{{ route('leave-requests.approve', $leaveRequest) }}">
        @csrf
        @method('PUT')
        <button type="submit">Approve</button>
    </form>

    <a href="{{ route('leave-requests.index') }}">Back</a>
@endsection
