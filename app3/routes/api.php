<?php

use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\api\TeacherController;
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

Route::resource('/alunos', StudentController::class);
Route::get('/professores', [TeacherController::class, 'index'])->name('professores.index');
Route::get('/professores/{professor}', [TeacherController::class, 'show'])->name('professores.show');
