<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Front\HomeController;
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


// Frontend views

Route::get('', [HomeController::class, 'index'])->name('index');

// Admin routes

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
