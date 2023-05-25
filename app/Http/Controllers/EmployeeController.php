<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        $employees = Employee::paginate(10);
        return view('employees.index', compact('employees'));
    }
    

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email_address' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        
        //Student::create($request->post());
        Employee::create([
            'fullname' => $request->fullname,
            'email_address' => $request->email_address,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ]);

        return redirect()->route('employees.index')->with('success','Employee Added Successfully.');
    }

   
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'fullname' => 'required',
            'email_address' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $employee->fill([
            'fullname' => $request->fullname,
            'email_address' => $request->email_address,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ])->save();

        return redirect()->route('employees.index')->with('success','Employee updated successfully');
    }

   
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Deleted Successfully');
    }
}