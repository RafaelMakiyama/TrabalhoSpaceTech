<?php

namespace App\Models;

use App\Services\GenerateStandardPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'registration',
        'fullname',
        'birthday',
        'financial_responsable',
        'cpf',
        'course_id',
        'financial_plan_id',
        'user_id'
    ]; 

    public function course(){
        return $this->hasOne(Course::class, 'id','course_id');
    }

    public function financialPlan(){
        return $this->hasOne(FinancialPlan::class,'id','financial_plan_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function createStudent($data)
    {
        $generatePassword = new GenerateStandardPassword();

        /**
         * @var User $user 
         */

        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($generatePassword($data->name, $data->registration)),
        ]);        

        $course = Course::find($data->course_id);
        $studentsInCurse = Student::where('course_id', '=' , $data->course_id)->count();        
        if($course->quantities_max_students <= $studentsInCurse){
            return redirect()->back()->with('error', "Quantidade máxima de alunos no curso {$course->name} atingida!");
        }
        return $user->students()->create([
            'registration' => $data->registration,
            'fullname' => $data->fullname,
            'birthday' => $data->birthday,
            'financial_responsable' => $data->financial_responsable,
            'cpf' => $data->cpf,
            'course_id' => $data->course_id,
            'financial_plan_id' => $data->financial_plan_id,
        ]);
    }

    public function updateStudent($data, $id)
    {
        $student = Student::find($id);
        $user = User::find($student->user_id);

        $user = $user->update([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->name.'123')            
        ]);
        
        if($student->course_id != $data->course_id){
            $course = Course::find($data->course_id);
            $studentsInCurse = Student::where('course_id', $data->course_id)->count();
            if($course->quantities_max_students <= $studentsInCurse){
                return redirect()->back()->with('error', "Quantidade máxima de alunos no curso {$course->name} atingida!");
            }
        }
        $student->update([
            'registration' => $data->registration,
            'fullname' => $data->fullname,
            'birthday' => $data->birthday,
            'financial_responsable' => $data->financial_responsable,
            'cpf' => $data->cpf,
            'course_id' => $data->course_id,
            'financial_plan_id' => $data->financial_plan_id
        ]);
    }
    
}
