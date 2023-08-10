<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    // public function index()
    // {
    //     $leaveTypes = LeaveType::all();
    //     return view('leave-types.index', compact('leaveTypes'));
    // }

    // public function create()
    // {
    //     return view('leave-types.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|unique:leave_types,name',
    //     ]);

    //     LeaveType::create($request->all());

    //     return redirect()->route('leave-types.index')
    //         ->with('success', 'Leave type created successfully.');
    // }

    // public function show(LeaveType $leaveType)
    // {
    //     return view('leave-types.show', compact('leaveType'));
    // }

    // public function edit(LeaveType $leaveType)
    // {
    //     return view('leave-types.edit', compact('leaveType'));
    // }

    // public function update(Request $request, LeaveType $leaveType)
    // {
    //     $request->validate([
    //         'name' => 'required|unique:leave_types,name,' . $leaveType->id,
    //     ]);

    //     $leaveType->update($request->all());

    //     return redirect()->route('leave-types.index')
    //         ->with('success', 'Leave type updated successfully.');
    // }

    // public function destroy(LeaveType $leaveType)
    // {
    //     $leaveType->delete();

    //     return redirect()->route('leave-types.index')
    //         ->with('success', 'Leave type deleted successfully.');
    // }

    public function index()
    {
        $leaveTypes = LeaveType::all();
        return view('leave-types.index', compact('leaveTypes'));
    }

    public function create()
    {
        return view('leave-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:leave_types,name',
        ]);

        LeaveType::create($request->all());

        return redirect()->route('leave-types.index')
            ->with('success', 'Leave type created successfully.');
    }

    public function show($id)
    {
        $leaveType = LeaveType::findOrFail($id);
        return view('leave-types.show', compact('leaveType'));
    }

    public function edit($id)
    {
        $leaveType = LeaveType::findOrFail($id);
        return view('leave-types.edit', compact('leaveType'));
    }

    public function update(Request $request, $id)
    {
        $leaveType = LeaveType::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:leave_types,name,' . $leaveType->id,
        ]);

        $leaveType->update($request->all());

        return redirect()->route('leave-types.index')
            ->with('success', 'Leave type updated successfully.');
    }

    public function destroy($id)
    {
        $leaveType = LeaveType::findOrFail($id);
        $leaveType->delete();

        return redirect()->route('leave-types.index')
            ->with('success', 'Leave type deleted successfully.');
    }
}
