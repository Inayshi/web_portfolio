<?php

use App\Http\Controllers\SummaryController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliationController;


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

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/cms', [SummaryController::class, 'index'])->name('cms'); 

Route::post('/summary/store', [SummaryController::class, 'store'])->name('summary.store'); 

Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');
Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');
Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');

Route::get('/affiliations', [AffiliationController::class, 'index'])->name('affiliations.index');
Route::post('/affiliations', [AffiliationController::class, 'store'])->name('affiliations.store');
Route::put('/affiliations/{affiliation}', [AffiliationController::class, 'update'])->name('affiliations.edit');
Route::delete('/affiliations/{affiliation}', [AffiliationController::class, 'destroy'])->name('affiliations.destroy');
