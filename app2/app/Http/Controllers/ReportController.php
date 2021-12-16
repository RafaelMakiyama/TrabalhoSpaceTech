<?php

namespace App\Http\Controllers;

use App\Models\{Trainee,Doctor,Donor,BloodBank,Donation};
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function administativeReport(){
        $doctors = Doctor::latest()->paginate(5, ['*'], 'doctors');
        $trainees = Trainee::latest()->paginate(5, ['*'], 'trainees');
        return view('reports.administrative', compact('doctors', 'trainees'));
    }

    public function doacaoReport(){
        $donors = Donor::latest()->paginate(5, ['*'], 'donors');
        $bloodBanks = BloodBank::latest()->paginate(5, ['*'], 'bloodBanks');
        $donations = Donation::latest()->paginate(5, ['*'], 'donations');
        return view('reports.donation', compact('donors', 'bloodBanks','donations'));
    }
}
