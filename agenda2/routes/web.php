<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/agenda', [EventController::class, 'index'])->name('agenda.index');
Route::post('/agenda', [EventController::class, 'store'])->name('agenda.store');
Route::put('/agenda/{id}', [EventController::class, 'update'])->name('agenda.update');
Route::delete('/agenda/{id}', [EventController::class, 'destroy'])->name('agenda.destroy');
