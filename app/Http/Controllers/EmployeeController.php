<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\LeaveRequest;
use App\Models\LeaveType;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $leaveTypes = LeaveType::all(); // Assuming you have LeaveType model

        return view('employees.create', compact('leaveTypes'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->role = $request->input('role');
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee added successfully');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validation and updating logic here

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }


    // public function storeLeaveRequest(Request $request)
    // {
    //     // Validate the request
    //     $validatedData = $request->validate([
    //         'leave_type_id' => 'required',
    //         'start_date' => 'required|date',
    //         'duration' => 'required|numeric',
    //     ]);

    //     // Create a new LeaveRequest record
    //     LeaveRequest::create([
    //         'employee_id' => auth()->user()->id,
    //         'leave_type_id' => $validatedData['leave_type_id'],
    //         'start_date' => $validatedData['start_date'],
    //         'duration' => $validatedData['duration'],
    //         'status' => 'pending', // Leave request starts as pending
    //     ]);

    //     return redirect()->route('employee.dashboard')
    //         ->with('success', 'Leave request submitted.');
    // }

    // public function viewLeaveRequestStatus()
    // {
    //     $user = auth()->user();
    //     $leaveRequests = $user->leaveRequests;

    //     return view('employee.leave-request-status', compact('leaveRequests'));
    // }
}
