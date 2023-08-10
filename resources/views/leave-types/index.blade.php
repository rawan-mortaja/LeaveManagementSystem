@extends('layouts.admin')

@section('title', 'Leave Types')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Leave Types</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard ml-3"></i> Home</a></li>
            <li class="active ml-3">Leave Types</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div container-fluid>
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-card">
                    <div class="card-header bg-primary text-white bg-gray">
                        <h3 class="box-title">List of Leave Types</h3>
                        <div class="box-tools">
                            <a href="{{ route('leave-types.create') }}" class="btn btn-primary btn-sm border bg-white">Add Leave Type</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaveTypes as $leaveType)
                                    <tr>
                                        <td>{{ $leaveType->id }}</td>
                                        <td>{{ $leaveType->name }}</td>
                                        <td>
                                            <a href="{{ route('leave-types.show', $leaveType->id) }}"
                                                class="btn btn-info btn-xs">View</a>
                                            <a href="{{ route('leave-types.edit', $leaveType->id) }}"
                                                class="btn btn-warning btn-xs">Edit</a>
                                            <form action="{{ route('leave-types.destroy', $leaveType->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                            </form>
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
