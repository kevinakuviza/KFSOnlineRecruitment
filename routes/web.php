<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AcademicQualification', [App\Http\Controllers\HomeController::class, 'AcademicQualification'])->name('AcademicQualification');
Route::get('/ProfessionalQualifications', [App\Http\Controllers\HomeController::class, 'ProfessionalQualifications'])->name('ProfessionalQualifications');
Route::get('/Experiences', [App\Http\Controllers\HomeController::class, 'Experiences'])->name('Experiences');
Route::get('/Memberships', [App\Http\Controllers\HomeController::class, 'Memberships'])->name('Memberships');

Route::get('/statutory', [App\Http\Controllers\HomeController::class, 'statutory'])->name('statutory');
