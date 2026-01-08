<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Introduction', [IntroductionController::class, 'index'])->name('Introduction.index');    

Route::get('/create', [IntroductionController::class, 'create'])->name('Introduction.create');

Route::post('/create', [IntroductionController::class, 'store'])->name('Introduction.store');

Route::get('/show/{introduction}', [IntroductionController::class, 'show'])->name('Introduction.show');

Route::post('/Introduction', [IntroductionController::class, 'store'])->name('Introduction.store');

Route::delete('/show/{introduction}', [IntroductionController::class, 'destroy'])->name('Introduction.destroy');