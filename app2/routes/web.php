<?php

use App\Http\Controllers\{DoctorController, PatientController, BloodBankController, 
    DonationController, TraineeController, ReportController, DonorController };
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
Route::resource('doadores', DonorController::class);
Route::resource('doacoes', DonationController::class);
Route::resource('estagiarios', TraineeController::class);
Route::get('relatorioadministrativo', [ReportController::class, 'administativeReport'])->name('relatorio.administrativo');
Route::get('relatoriodoacao', [ReportController::class, 'doacaoReport'])->name('relatorio.doacao');
Route::get('relatorio', function(){
    return view('reports.index');
})->name('relatorio.index');
