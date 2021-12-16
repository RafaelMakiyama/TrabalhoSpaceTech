<?php

namespace App\Http\Controllers;

use App\Models\{Trainee,Doctor,Donor,BloodBank,Donation};
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function administativeReport(){
        $doctors = Doctor::latest()->paginate(5, ['*'], 'doctors');
        $doctorsTotal = Doctor::all()->count();

        $trainees = Trainee::latest()->paginate(5, ['*'], 'trainees');
        $traineesTotal = Trainee::all()->count();

        return view('reports.administrative', compact('doctors', 'doctorsTotal' , 'trainees' , 'traineesTotal'));
    }

    public function doacaoReport(){
        $donors = Donor::latest()->paginate(5, ['*'], 'donors');
        $donorsTotal = Donor::all()->count();

        $bloodBanks = BloodBank::latest()->paginate(5, ['*'], 'bloodBanks');
        $bloodBanksTotal = BloodBank::all()->count();

        $donations = Donation::latest()->paginate(5, ['*'], 'donations');
        $donationsTotal = Donation::all()->count();
        return view('reports.donation', compact('donors', 'bloodBanks', 'bloodBanksTotal' ,'donations', 'donorsTotal','donationsTotal'));
    }
}
