@extends('layouts.admin')

@section('title', 'Edit Leave Request')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Leave Request</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('leave-requests.index') }}">Leave Requests</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Leave Request</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('leave-requests.update', $leaveRequest->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="employee_id">Employee</label>
                                <select class="form-control" id="employee_id" name="employee_id">
                                    <option value="" selected disabled>Select an employee</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}"{{ $employee->id == $leaveRequest->employee_id ? ' selected' : '' }}>{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="leave_type_id">Leave Type</label>
                                <select class="form-control" id="leave_type_id" name="leave_type_id">
                                    <option value="" selected disabled>Select a leave type</option>
                                    @foreach ($leaveTypes as $leaveType)
                                        <option value="{{ $leaveType->id }}"{{ $leaveType->id == $leaveRequest->leave_type_id ? ' selected' : '' }}>{{ $leaveType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $leaveRequest->start_date }}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $leaveRequest->end_date }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="pending"{{ $leaveRequest->status == 'pending' ? ' selected' : '' }}>Pending</option>
                                    <option value="approved"{{ $leaveRequest->status == 'approved' ? ' selected' : '' }}>Approved</option>
                                    <option value="denied"{{ $leaveRequest->status == 'denied' ? ' selected' : '' }}>Denied</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
