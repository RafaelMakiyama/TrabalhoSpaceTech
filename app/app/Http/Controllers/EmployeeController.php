<?php

namespace App\Http\Controllers;
use App\Models\Employee;


use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function listEmployees(){
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }
}
