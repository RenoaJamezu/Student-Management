<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// introduction
Route::get('/', function () {
  return 'Hello from laravel';
});

Route::get('about', function () {
  return 'About us';
});

// grouping / naming
Route::prefix('details')->group(function () {
  Route::get('teacher', function () {
    return 'Teacher details';
  })->name('teacher-Details');
  Route::get('student', function () {
    return 'Student details';
  })->name('student-Details');
});

// parameter
Route::get('student/{id}/{reg}', function ($id, $reg) {
  return 'student number ' . $id . ' registration number ' . $reg;
});

// fallback
Route::fallback(function() {
  return 'this page is not found please try again.';
});