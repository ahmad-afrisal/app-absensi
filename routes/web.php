<?php

use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\ProfileController;
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

// Route::resource('semesters', SemesterController::class);
Route::controller(SemesterController::class)->group(function () {
    Route::get('semesters', 'index')->name('semesters.index');
    Route::post('semesters', 'store')->name('semesters.store');
    Route::get('semesters/create', 'create')->name('semesters.create');
    Route::put('semesters/{semester:slug}', 'update')->name('semesters.update');
    Route::delete('semester/{semester:slug}', 'destroy')->name('semesters.destroy');;
    Route::get('semesters/{semester:slug}/edit', 'edit')->name('semesters.edit');;
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
