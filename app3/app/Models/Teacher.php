<?php

namespace App\Models;

use App\Services\GenerateStandardPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'fullname',
        'registration',
        'competence',
        'scholarity',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cadastrarProfessor($dados){

        $generatePassword = new GenerateStandardPassword();
        
        /**
         * @var User $user 
         */

        $user = User::create([
            'name' => $dados->name,
            'email' => $dados->email,
            'password' => Hash::make($generatePassword($dados->name, $dados->registration)),
        ]);

        return $user->teachers()->create([
            'fullname' => $dados->fullname,
            'registration' => $dados->registration,
            'competence' => $dados->competence,
            'scholarity' => $dados->scholarity,
        ]);        
    }

    public function updateTeacher($dados){
        $user =  User::find($dados->user_id);

        $user->update([
            'name' => $dados->name,
            'email' => $dados->email,
        ]);

       

        $user->teachers()->update([
            'fullname' => $dados->fullname,
            'registration' => $dados->registration,
            'competence' => $dados->competence,
            'scholarity' => $dados->scholarity,
        ]); 

        return $user;
   
    }
    
}
