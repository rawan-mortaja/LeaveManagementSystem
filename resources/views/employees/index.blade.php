@extends('layouts.admin')

@section('title', 'Employees')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Employees</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard ml-3"></i> Home</a></li>
            <li class="active ml-3">Employees</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div container-fluid>
            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="box-title">List of Employees</h3>
                            <div class="box-tools">
                                <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm border">Add Employee</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->role }}</td>
                                            <td>
                                                <a href="{{ route('employees.show', $employee->id) }}"
                                                    class="btn btn-info btn-xs">View</a>
                                                <a href="{{ route('employees.edit', $employee->id) }}"
                                                    class="btn btn-warning btn-xs">Edit</a>
                                                <form action="{{ route('employees.destroy', $employee->id) }}"
                                                    method="POST" style="display: inline-block;">
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
