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

// Route::get('/', [App\Http\Controllers\TeachersController::class, 'index'])->name('index');

// Route::get('/allschools', [App\Http\Controllers\TeachersController::class, 'allschools'])->name('allschools');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get('schools', [App\Http\Controllers\SchoolsController::class, 'index'])->name('schools');

Route::get('schools/create', [App\Http\Controllers\SchoolsController::class, 'create'])->name('schools.create');

Route::get('schools/{id}', [App\Http\Controllers\SchoolsController::class, 'show'])->name('schools.show');

Route::resource('teachers', 'TeachersController');
Route::resource('students', 'StudentController');
Route::resource('school', 'SchoolController');

Auth::routes();

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

