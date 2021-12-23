<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'num_lesson',
        'theme',
        'duration',
        'obs',
        'cpf',
        'course_id',
        'financial_plan_id'
    ]; 

    public function Teacher(){
        return $this->hasOne(Teacher::class, 'id','teacher_id');
    }

    public function Courses(){
        return $this->hasOne(Courses::class,'id','course_id');
    }
}
