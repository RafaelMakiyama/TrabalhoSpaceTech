<?php

namespace App\Models;

use App\Services\GenerateStandardPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

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
        'teacher_id',
        'course_id',
        
    ]; 

    public function cadastrarAulas($dados){

        // dd($dados);
        return $lesson = Lesson::create([
            'num_lesson' => $dados->num_lesson,
            'theme' => $dados->theme,
            'duration' => $dados->duration,
            'obs' => $dados->obs,
            'teacher_id' => $dados->teacher_id,
            'course_id' => $dados->course_id
        ]);
      
    }

    public function Teacher(){
        return $this->hasOne(Teacher::class, 'id','teacher_id');
    }

    public function Course(){
        return $this->hasOne(Course::class,'id','course_id');
    }
}
