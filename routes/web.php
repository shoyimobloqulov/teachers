<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/documents',[ProfileController::class,'documents'])->name('documents.index');
    Route::get('/documents/create',[ProfileController::class,'documentsCreate'])->name('documents.create');
    Route::get('/documents/{id}/edit',[ProfileController::class,'editFile'])->name('documents.edit');
    Route::delete('/documents/delete/{id}',[ProfileController::class,'destroyFile'])->name('documents.destroy');
    Route::post('/profile/faculty/{id}/update',[ProfileController::class,'UserFaculty'])->name('faculty.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
