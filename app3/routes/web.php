<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FinancialPlanController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function (){
    Route::middleware(['role:admin'])->group(function(){
        Route::resource('/professor', TeacherController::class);
        Route::resource('alunos', StudentController::class);
        Route::resource('cursos', CourseController::class);
        Route::resource('planos-financeiro', FinancialPlanController::class);
        Route::resource('aulas', LessonController::class);
    });
    Route::middleware(['role:teacher'])->group(function(){
        Route::get('/listar-aulas',[TeacherController::class, 'listAllLessonsById'])->name('listar.aulas');
        Route::get('/criar-aula',[LessonController::class, 'createByTeacher'])->name('criar.aula');
        Route::post('/aulas/storeByTeacher',[LessonController::class, 'storeByTeacher'])->name('aulas.storeByTeacher');
    });
    Route::middleware(['role:student'])->group(function(){
        Route::get('/cursos-estudante',[StudentController::class, 'profile'])->name('cursos-estudante');
    });  
});

require __DIR__.'/auth.php';