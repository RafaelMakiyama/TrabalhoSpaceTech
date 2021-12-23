<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FinancialPlanController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::resource('/professor', TeacherController::class);
Route::resource('alunos', StudentController::class);
Route::resource('cursos', CourseController::class);
Route::resource('planos-financeiro', FinancialPlanController::class);
Route::resource('aulas', LessonController::class);
