<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $count = Employee::get()->count();
        $search = $req->search;
        if ($search != '') {


            $employees = Employee::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->orWhere('id', 'LIKE', "%$search%")->get();;

            return view('index', compact('employees','count'));
        } else {

            $employees = Employee::orderBy('id', 'DESC')->get();

            return view('index', compact('employees','count'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'city' => 'required',
            'age' => 'required'
        ]);
        $employees = Employee::create($data);
        if ($employees) {

            return redirect()->route('employee.index')->with('status', 'User Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $employee)
    {
        $employees = Employee::find($employee);
        return view('viewuser', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $employee)
    {
        $employees = Employee::find($employee);
        return view('updateuser', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $employee)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'city' => 'required',
            'age' => 'required'
        ]);
        $employees = Employee::where('id', $employee)->update($data);
        if ($employees) {

            return redirect()->route('employee.index')->with('status', 'User Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $employee)
    {
        $employees = Employee::find($employee);
        $employees->delete();
        if ($employees) {
            return redirect()->route('employee.index')->with('status', 'User Deleted Successfully');
        }
    }
}
