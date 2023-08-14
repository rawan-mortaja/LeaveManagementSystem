@extends('layouts.admin')

@section('title', 'Deny Leave Request')

@section('content')
    <div class="container">
        <h2>Deny Leave Request</h2>

        <form method="get" action="{{ route('leave-requests.deny', $leaveRequest) }}">
            @csrf
            <div class="col-6">
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                {{-- @method('PUT') --}}
                <label class="form-label" for="reason">Reason:</label>
                <textarea class="form-control" rows="5" name="reason" id="reason" rows="4" required></textarea>
            </div>
            <div class="col-6">
            <button type="submit" class="btn btn-danger mt-4">Deny</button>
            <a class="btn btn-dark mt-4" href="{{ route('leave-requests.index') }}">Back</a>
            </div>
        </form>


    </div>

@endsection
