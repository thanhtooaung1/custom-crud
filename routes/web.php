<?php

use App\Http\Controllers\CourseController;
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

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
