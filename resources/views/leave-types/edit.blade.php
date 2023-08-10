@extends('layouts.admin')

@section('title', 'Edit Leave Type')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Leave Type</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard ml-3"></i> Home</a></li>
            <li><a href="{{ route('leave-types.index') }}" class="ml-3">Leave Types</a></li>
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
                        <h3 class="box-title">Edit Leave Type</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('leave-types.update', $leaveType->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Leave Type Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $leaveType->name }}" placeholder="Enter leave type name">
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
