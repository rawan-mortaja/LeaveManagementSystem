@extends('layouts.admin')

@section('title', 'Leave Request Details')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Leave Request Details</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('leave-requests.index') }}">Leave Requests</a></li>
            <li class="active">Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Leave Request Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $leaveRequest->id }}</td>
                            </tr>
                            <tr>
                                <th>Employee</th>
                                <td>{{ $leaveRequest->employee->name }}</td>
                            </tr>
                            <tr>
                                <th>Leave Type</th>
                                <td>{{ $leaveRequest->leaveType->name }}</td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td>{{ $leaveRequest->start_date }}</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td>{{ $leaveRequest->end_date }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $leaveRequest->status }}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('leave-requests.edit', $leaveRequest->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
