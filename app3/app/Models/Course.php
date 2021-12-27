<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quanties_max_students',
        'description',
        'category',
        'monthly',
        'status'
    ];

    public function Student(){
        return $this->belongsTo(Student::class);
    }
}