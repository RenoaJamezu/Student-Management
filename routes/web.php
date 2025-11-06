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

Route::get('/', function () {
  return view('welcome');
});

// passing data from route to view
// there are 3 methods

// with callback function & without route parameters
// Route::get('about-us', function () {
//   $name = 'tester';
//   $email = 'tester@gmail.com';
//   // return view('aboutus')->with('name', $name)->with('email', $email); // first method
//   return view('aboutus', compact('name', 'email')); // second method
//   // return view('aboutus', ['name' => $name, 'email' => $email]); // third method
// });

// with callback function & with route parameters
Route::get('about-us/{name}/{id}', function($name, $id) {
  return view('aboutus', compact('name', 'id'));
});



// without callback function & without route parameter
// Route::view('contact-us', 'contactus', ['name' => 'tester', 'email' => 'tester@gmail.com']);

// without callback function & with route parameter
Route::view('contact-us/{name}/{id}', 'contactus');
