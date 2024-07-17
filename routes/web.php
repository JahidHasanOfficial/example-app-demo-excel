<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExelDemoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ExelDemoController::class, 'index']);
Route::post('/import-excel', [ExelDemoController::class, 'import'])->name('import.excel');

Route::get('/verify-certificate', [ExelDemoController::class, 'showVerificationForm'])->name('certificates.verify');
Route::post('/verify-certificate', [ExelDemoController::class, 'verifyCertificate'])->name('certificates.verify.post');
