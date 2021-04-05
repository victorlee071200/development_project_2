<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminProgramController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return view('test');
})->name('dashboard');


Route::get('Admin/approve_program', function () {
    return view('Admin.approve_program');
});

Route::get('Staff', function () {
    return view('Staff.create_program');
});

Route::get('Admin/view_program', [AdminProgramController::class, 'index']);

Route::get('Admin/{program}', [AdminProgramController::class, 'show']);

Route::post('/create_program', [ProgramController::class, 'store']);

Route::post('/approve_program', [AdminProgramController::class, 'store']);