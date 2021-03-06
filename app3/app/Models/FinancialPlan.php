<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'discount',
        'observation',
    ];


}
