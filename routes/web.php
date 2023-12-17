<?php

use App\Http\Controllers\RouteModuleController;
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

Route::get('/', [RouteModuleController::class, 'home'])->name('home');
Route::get('contact', [RouteModuleController::class, 'contact'])->name('contactus');
Route::get('careers', [RouteModuleController::class, 'careers'])->name('careers');
Route::get('about', [RouteModuleController::class, 'about'])->name('about');
Route::get('about/executive-team', [RouteModuleController::class, 'executive'])->name('about.executive');
