<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_name',
        'day'
    ];

    protected $cats =[
        'entry_time'=> 'time',
        'out_time'=> 'time'
    ];
    
}
