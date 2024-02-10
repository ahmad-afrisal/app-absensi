<?php

use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ProfileController;
use App\Models\Group;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

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


Route::get('/admin', function() {
    return 'Hi Admin';
})->middleware('role:admin');

Route::get('/student', function() {
    return 'Hi User';
})->middleware('role:student');

Route::get('/teacher', function() {
    return 'Hi User';
})->middleware('role:teacher');

Route::get('qrcode', function () {

    return FacadesQrCode::size(120)->generate('D0220374');
});

// Route::resource('semesters', SemesterController::class);
Route::controller(SemesterController::class)->group(function () {
    Route::get('semesters', 'index')->name('semesters.index');
    Route::post('semesters', 'store')->name('semesters.store');
    Route::get('semesters/create', 'create')->name('semesters.create');
    Route::put('semesters/{semester:slug}', 'update')->name('semesters.update');
    Route::delete('semester/{semester:slug}', 'destroy')->name('semesters.destroy');
    Route::get('semesters/{semester:slug}/edit', 'edit')->name('semesters.edit');
});

Route::controller(GroupController::class)->group(function () {
    Route::get('groups', 'index')->name('groups.index');
    Route::post('groups', 'store')->name('groups.store');
    Route::get('groups/create', 'create')->name('groups.create');
    Route::put('groups/{group:slug}', 'update')->name('groups.update');
    Route::delete('groups/{group:slug}', 'destroy')->name('groups.destroy');
    Route::get('groups/{group:slug}/edit', 'edit')->name('semesters.edit');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('teachers','index')->name('teachers.index');
    Route::get('teachers/create','create')->name('teachers.create');
    Route::post('teachers', 'store')->name('teachers.store');
    Route::get('teachers/edit/{id}', 'edit')->name('teachers.edit');
    Route::put('teachers/update/{id}', 'update')->name('teachers.update');
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
