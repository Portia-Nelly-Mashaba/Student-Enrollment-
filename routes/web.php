<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('student/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/student/{students}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [App\Http\Controllers\StudentController::class, 'update']);
Route::delete('/student/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy');


// Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
//     Route::get('/student', 'index');
//     Route::get('/student/create', 'create');
//     Route::post('/student', 'store')->name('student.store');
//     //Route::post('/student/{students}/edit', 'edit')->name('student.edit');

// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



