<?php

use App\Http\Controllers\MakeupController;
use Illuminate\Support\Facades\Route;

Route::get('/makeup', [MakeupController::class, 'index'])->name('makeups.index');

Route::get('/makeup/create', [MakeupController::class, 'create'])->name('makeups.create');

Route::post('/makeup', [MakeupController::class, 'store'])->name('makeups.store');

Route::get('/makeup/{slug}', [MakeupController::class, 'show'])->name('makeups.show');

Route::get('/makeup/{slug}/edit', [MakeupController::class, 'edit'])->name('makeups.edit');

Route::put('makeup/{id}', [MakeupController::class, 'update'])->name('makeups.update');

Route::delete('/makeup/{id}', [MakeupController::class, 'destroy'])->name('makeups.destroy');
