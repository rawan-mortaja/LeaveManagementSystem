@extends('layouts.admin')

@section('title', 'Approve Leave Request')

@section('content')
    <div class="container">
        <div class="col-6">
            <h2>Approve Leave Request</h2>

            <p>Are you sure you want to approve this leave request?</p>
        </div>

        <form method="get" action="{{ route('leave-requests.approve', $leaveRequest) }}">
            @csrf
            {{-- @method('PUT') --}}
            <div class="col-6">
                <button type="submit" type="submit" class="btn btn-primary mt-4">Approve</button>
                <a class="btn btn-dark mt-4" href="{{ route('leave-requests.index') }}">Back</a>
            </div>
        </form>
    </div>


@endsection
