@extends('layouts.admin')

@section('title', 'Leave Requests')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Leave Requests</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard ml-3"></i> Home</a></li>
            <li class="active ml-3">Leave Requests</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div container-fluid>
            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header bg-primary text-white bg-gray">
                            <h3 class="box-title">List of Leave Requests</h3>
                            <div class="box-tools">
                                <a href="{{ route('leave-requests.create') }}"
                                    class="btn btn-primary btn-sm border bg-white">Add Leave
                                    Request</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee</th>
                                        <th>Leave Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leaveRequests as $leaveRequest)
                                        <tr>
                                            <td>{{ $leaveRequest->id }}</td>
                                            <td>{{ $leaveRequest->employee->name }}</td>
                                            <td>{{ $leaveRequest->leaveType->name }}</td>
                                            <td>{{ $leaveRequest->status }}</td>
                                            <td>
                                                @if ($leaveRequest->status === 'pending')
                                                    <a class="btn btn-primary"
                                                        href="{{ route('leave-requests.approve', $leaveRequest) }}">Approve</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ route('leave-requests.deny', $leaveRequest) }}">Deny</a>
                                                @endif
                                                <a href="{{ route('leave-requests.show', $leaveRequest) }}">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
