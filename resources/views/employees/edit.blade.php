@extends('layouts.admin')

@section('title', 'Edit Employee')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Employee</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard ml-3 "></i> Home</a></li>
            <li><a href="{{ route('employees.index') }}" class="ml-3">Employees</a></li>
            <li class="active ml-3">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Employee</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Employee Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $employee->name }}" placeholder="Enter employee name">
                            </div>
                            <div class="form-group">
                                <label for="role">Employee Role</label>
                                <input type="text" class="form-control" id="role" name="role"
                                    value="{{ $employee->role }}" placeholder="Enter employee role">
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
