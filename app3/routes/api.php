<?php

use App\Http\Controllers\api\{CourseController, StudentController, TeacherController, LessonController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alunos/curso/{curso}', [StudentController::class,'students_by_course'])->name('alunos.curso')->middleware('auth.basic');
Route::get('/alunos/{aluno}/aulas', [StudentController::class,'lessons_by_student'])->name('alunos.aulas')->middleware('auth.basic');
Route::get('/professores', [TeacherController::class, 'index'])->name('professores.index')->middleware('auth.basic');
Route::get('/professores/{professor}', [TeacherController::class, 'show'])->name('professores.show')->middleware('auth.basic');
Route::get('/cursos/{status}', [CourseController::class, 'courses_status'])->name('cursos.status')->middleware('auth.basic');
Route::get('/aulas', [LessonController::class, 'index'])->name('aulas.show')->middleware('auth.basic');
Route::get('/aulas/curso/{curso}', [LessonController::class, 'lesson_course'])->name('aulas_curso.show')->middleware('auth.basic');
