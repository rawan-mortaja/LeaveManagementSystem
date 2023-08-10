@extends('layouts.admin')

@section('title', 'Create Leave Type')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Leave Type</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard "></i> Home</a></li>
            <li><a href="{{ route('leave-types.index') }}" class="mr-3">Leave Types</a></li>
            <li class="active" class="mr-3">Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Leave Type</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('leave-types.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Leave Type Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter leave type name">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
