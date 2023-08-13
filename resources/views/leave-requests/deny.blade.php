@extends('layouts.admin')

@section('title', 'Deny Leave Request')

@section('content')
    <h2>Deny Leave Request</h2>

    <form method="POST" action="{{ route('leave-requests.deny', $leaveRequest) }}">
        @csrf
        @method('PUT')
        <label for="reason">Reason:</label>
        <textarea name="reason" id="reason" rows="4" required></textarea>

        <button type="submit">Deny</button>
    </form>

    <a href="{{ route('leave-requests.index') }}">Back</a>
@endsection
