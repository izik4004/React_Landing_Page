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

Route::get('/', [App\Http\Controllers\TeachersController::class, 'index'])->name('index');

Route::get('/allschools', [App\Http\Controllers\TeachersController::class, 'allschools'])->name('allschools');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('schools', [App\Http\Controllers\SchoolsController::class, 'index'])->name('schools');

Route::get('schools/create', [App\Http\Controllers\SchoolsController::class, 'create'])->name('schools.create');

Route::get('schools/{id}', [App\Http\Controllers\SchoolsController::class, 'show'])->name('schools.show');

Route::resource('teachers', 'TeachersController');

// Auth::routes();


Route::get('/form', function()
{
    return View('school-form');
});