<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Trainee;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function administativeReport(){
        $doctors = Doctor::latest()->paginate(5);
        $trainees = Trainee::latest()->paginate(5);
        return view('reports.administrative', compact('doctors', 'trainees'));
    }
}
