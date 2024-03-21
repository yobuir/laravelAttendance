<?php

use App\Http\Controllers\Dashboard\InstitutionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/institutions',[InstitutionController::class, 'index'])->name('institutions');
    Route::post('/institutions', [InstitutionController::class, 'store'])->name('institutions.store');
    Route::get('/institutions/{id}', [InstitutionController::class, 'edit'])->name('institutions.edit');
    Route::post('/institutions/{id}/update', [InstitutionController::class, 'edit'])->name('institutions.update');
    Route::post('/institutions/{id}/delete', [InstitutionController::class, 'destroy'])->name('institutions.destroy');

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


