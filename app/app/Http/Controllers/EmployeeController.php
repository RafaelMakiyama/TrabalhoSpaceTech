<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Timetable;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function listEmployees(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    function show($id){
        $employee = Employee::find($id);

        if(!$employee){
            return redirect()->route('employees.index');
        }
        
        $timeTables = Timetable::where('employe_name','=',$employee->name)->get();
        return view('employee.show', compact('timeTables', 'employee'));
    }

}
