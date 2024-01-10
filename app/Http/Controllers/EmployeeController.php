<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeEmployeetRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees=employee::all();
         return view('employee.index',compact('employees'));
    //   return view('employee.index');

    }

    public function create(){
        return view('employee.create');
    }

    public function store(storeEmployeetRequest $request){
        $employee=new employee();
        $employee->name=$request->name;
        $employee->position=$request->position;
        $employee->department=$request->department;
        $employee->salary=$request->salary;
        $employee->save();
        return redirect()->route('employee.index');

    }
    public function edit(Employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }
    public function show(Employee $employee){
        return view('employee.detail',compact('employee'));
    }
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->name=$request->name;
        $employee->position=$request->position;
        $employee->department=$request->department;
        $employee->salary=$request->salary;
        $employee->update();
        return redirect()->route('employee.index');
    }
    public function destroy(Employee $employee)
    {
        if($employee)
        $employee->delete();
        return redirect()->route('employee.index');
    }
}

