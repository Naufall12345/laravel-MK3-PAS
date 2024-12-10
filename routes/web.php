<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//habis get itu ada / itu diurutin buat kaya web profesional

//Route::get('/', function () {
 //   return view('login'); 
//});

//Route::get('/index', function () {
  //  return view('index'); 
//});

//Route::get('/welcome', function () {
//    return view('welcome'); //menuju ke file wlelcome.blade.php di folder resources-views
//});

//Route::get('/about', function () {
//    return view('about'); 
//});

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/index', [HomeController::class, 'index'])->name('index');
