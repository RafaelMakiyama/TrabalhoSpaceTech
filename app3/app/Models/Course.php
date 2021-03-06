<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantities_max_students',
        'description',
        'category',
        'monthly',
        'status'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
