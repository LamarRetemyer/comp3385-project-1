<?php

use App\Http\Controllers\IndividualPropertyController;
use App\Http\Controllers\ViewPropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
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

Route::get('/about', function () {
    return view('about');
});

// Create additional Routes below
Route::get('/properties/create', [PropertyController::class, 'create'])->name('property.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('property.store');
Route::get('/dashboard', [ViewPropertyController::class, 'index'])->name('dashboard');
Route::get('/properties/{id}', [IndividualPropertyController::class, 'index'])->name('property.show');
