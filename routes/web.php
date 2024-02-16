<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CalculatorController::class, 'ViewCalculator'])->name('main_page');
Route::post('/submit', [CalculatorController::class, 'AddCalculator'])->name('addCalculator');
Route::get('/validation/{telephone}', [CalculatorController::class, 'ViewOtp'])->name('ViewOtp');
Route::post('/validation/submit/{telephone}', [CalculatorController::class, 'SubmitOtp'])->name('SubmitOtp');
Route::get('/result/{token}', [CalculatorController::class, 'ViewInvoice'])->name('ViewInvoice');
Route::get('/data_provinsi', [CalculatorController::class, 'GetProvinsi'])->name('GetProvinsi');
Route::get('/data_kota/{id}', [CalculatorController::class, 'GetCity'])->name('GetCity');
Route::post('/nama', [CalculatorController::class, 'nama'])->name('nama');
