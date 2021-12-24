<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $with = [
        'Course'
    ];
    
    protected $fillable = 
    [
        'registration',
        'name',
        'birthday',
        'financial_responsable',
        'cpf',
        'course_id',
        'financial_plan_id',
        'user_id'
    ]; 

    public function Course(){
        return $this->hasOne(Course::class, 'id','course_id');
    }

    public function FinancialPlan(){
        return $this->hasOne(FinancialPlan::class,'id','financial_plan_id');
    }

    public function User(){
        return $this->hasOne(User::class,'id','user_id');
    }
    
}
