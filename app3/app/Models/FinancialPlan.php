<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discount',
        'observation',
    ];

    public function Student(){
        return $this->belongsTo(Student::class);
    }

}
