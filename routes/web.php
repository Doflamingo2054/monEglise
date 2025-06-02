<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/search', function () {
    // You can return a view or controller here
    return view('search');
})->name('search');

Route::get('/community', function () {
    return view('community');
})->name('community');

Route::get('/donation', function () {
    return view('donation');
})->name('donation');

Route::get('/meditation', function () {
    return view('meditation');
})->name('meditation');

// Route::get('/multimedia', function () {
//     return view('multimedia');
// })->name('multimedia');
Route::get('multimedia', [MultimediaController::class, 'index'])
     ->name('multimedia.index');

Route::get('/create-post', function () {
    return view('create-post');
})->name('create-post');


// Auth (login, register, reset…)
require __DIR__.'/auth.php';

// -----------------------------------------------------------------------------
// TABLEAUX DE BORD
// -----------------------------------------------------------------------------

// Tableau de bord membre
Route::middleware('auth')
     ->get('/dashboard', [MemberController::class, 'index'])
     ->name('dashboard');

// Tableau de bord admin
Route::middleware(['auth','admin'])
     ->prefix('admin')->name('admin.')
     ->get('/dashboard', [DashboardController::class, 'index'])
     ->name('dashboard');

// -----------------------------------------------------------------------------
// ÉVÉNEMENTS
// -----------------------------------------------------------------------------

// Public : voir l’agenda (liste)
Route::get('events', [EventController::class, 'index'])
     ->name('events.index');

// Admin : CRUD complet + calendrier
Route::middleware(['auth','admin'])
     ->prefix('admin')->name('admin.')
     ->group(function () {
         // Calendrier interactif
         Route::get('events/calendar', [EventController::class, 'index'])
              ->name('events.calendar');
         // Resource (index, create, store, show, edit, update, destroy)
         Route::resource('events', EventController::class);
     });

// -----------------------------------------------------------------------------
// MULTIMÉDIA
// -----------------------------------------------------------------------------

// Public : voir les vidéos
Route::get('multimedia', [MultimediaController::class, 'index'])
     ->name('multimedia.index');

// -----------------------------------------------------------------------------
// PRIÈRES
// -----------------------------------------------------------------------------

// Public : voir les prières publiées
Route::get('prayers', [PrayerController::class, 'publicIndex'])
     ->name('prayers.index');

// Membre (auth) : création
Route::middleware('auth')
     ->group(function () {
         Route::get('prayers/create', [PrayerController::class, 'create'])
              ->name('prayers.create');
         Route::post('prayers', [PrayerController::class, 'store'])
              ->name('prayers.store');
     });

// Admin : gestion (validation/rejet/suppression)
Route::middleware(['auth','admin'])
     ->prefix('admin')->name('admin.')
     ->group(function () {
         Route::get('prayers', [PrayerController::class, 'adminIndex'])
              ->name('prayers.index');
         Route::post('prayers/{prayer}/publish', [PrayerController::class, 'publish'])
              ->name('prayers.publish');
         Route::post('prayers/{prayer}/reject', [PrayerController::class, 'reject'])
              ->name('prayers.reject');
         Route::delete('prayers/{prayer}', [PrayerController::class, 'destroy'])
              ->name('prayers.destroy');
     });

// -----------------------------------------------------------------------------
// TÉMOIGNAGES
// -----------------------------------------------------------------------------

// Public : voir les témoignages publiés
Route::get('testimonies', [TestimonyController::class, 'publicIndex'])
     ->name('testimonies.index');

// Membre (auth) : création
Route::middleware('auth')
     ->group(function () {
         Route::get('testimonies/create', [TestimonyController::class, 'create'])
              ->name('testimonies.create');
         Route::post('testimonies', [TestimonyController::class, 'store'])
              ->name('testimonies.store');
     });

// Admin : gestion (validation/rejet/suppression)
Route::middleware(['auth','admin'])
     ->prefix('admin')->name('admin.')
     ->group(function () {
         Route::get('testimonies', [TestimonyController::class, 'adminIndex'])
              ->name('testimonies.index');
         Route::post('testimonies/{testimony}/publish', [TestimonyController::class, 'publish'])
              ->name('testimonies.publish');
         Route::post('testimonies/{testimony}/reject', [TestimonyController::class, 'reject'])
              ->name('testimonies.reject');
         Route::delete('testimonies/{testimony}', [TestimonyController::class, 'destroy'])
              ->name('testimonies.destroy');
     });

// -----------------------------------------------------------------------------
// COMMENTAIRES (AJAX)
// -----------------------------------------------------------------------------

Route::middleware('auth')
     ->group(function () {
         Route::post('comments', [CommentController::class, 'store'])
              ->name('comments.store');
         Route::delete('comments/{comment}', [CommentController::class, 'destroy'])
              ->name('comments.destroy');
     });
