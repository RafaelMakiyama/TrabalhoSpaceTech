<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;

class TimetableController extends Controller
{
    function listTimesTable(){
        $timesTable = Timetable::all();
        return view('timeTable.index', compact('timesTable'));
    }
}
