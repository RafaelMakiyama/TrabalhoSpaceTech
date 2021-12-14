<?php

<<<<<<< HEAD
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\DoctorController;
=======
use App\Http\Controllers\{DoctorController, PatientController};
>>>>>>> f07eb6cb6308dc572c2323df5f3aee0a75a12ff8
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

Route::resource('medicos', DoctorController::class);
Route::resource('banco-de-sangue', BloodBankController::class );
Route::resource('pacientes', PatientController::class);
