<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SummaryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/cms', [SummaryController::class, 'index'])->name('cms');
Route::post('/experiences', [ExperienceController::class, 'store']);
Route::put('/experiences/{id}', [ExperienceController::class, 'update']);
Route::delete('/experiences/{id}', [ExperienceController::class, 'destroy']);