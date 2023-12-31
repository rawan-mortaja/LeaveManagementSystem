<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use App\Models\LeaveType;

class LeaveRequestController extends Controller
{
    public function index()
    {
        $leaveRequests = LeaveRequest::all();
        return view('leave-requests.index', compact('leaveRequests'));
    }

    public function create()
    {
        $employees = Employee::all();
        $leaveTypes = LeaveType::all();
        return view('leave-requests.create', compact('employees', 'leaveTypes'));
    }

    public function store(Request $request)
    {
        // Validation and storing logic here
        $request->validate([
            'employee_id' => 'required',
            'leave_type_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        LeaveRequest::create($request->all());

        return redirect()->route('leave-requests.index')
            ->with('success', 'Leave request created successfully.');
    }

    public function show($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        return view('leave-requests.show', compact('leaveRequest'));
    }

    public function edit($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $employees = Employee::all();
        $leaveTypes = LeaveType::all();
        return view('leave-requests.edit', compact('leaveRequest', 'employees', 'leaveTypes'));
    }

    public function update(Request $request, LeaveRequest $leaveRequest)
    {

        // Validation and storing logic here
        $request->validate([
            'employee_id' => 'required',
            'leave_type_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'nullable',
        ]);
        $leaveRequest->update($request->all());

        return redirect()->route('leave-requests.index')
            ->with('success', 'Leave request updated successfully.');
    }

    public function destroy($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->delete();

        return redirect()->route('leave-requests.index')
            ->with('success', 'Leave request deleted successfully.');
    }

    public function approve(LeaveRequest $leaveRequest)
    {
        $leaveRequest->status = 'approved';
        $leaveRequest->save();

        return view('leave-requests.approve', compact('leaveRequest'))
            ->with('success', 'Leave request approved.');
    }
    public function deny(Request $request, LeaveRequest $leaveRequest)
    {
        // $validatedData = $request->validate([
        //     'reason' => 'required|string',
        // ]);

        $leaveRequest->status = 'denied';
        $leaveRequest->reason = $request->reason;
        $leaveRequest->save();

        return view('leave-requests.deny', compact('leaveRequest'))
            ->with('error', 'Leave request denied.');
    }
}
