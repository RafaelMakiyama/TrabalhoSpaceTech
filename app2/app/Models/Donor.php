<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telephone',
        'email',
        'weight',
        'height',
        'smoker',
        'disease',
        'comments'
    ];
}
