<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('home');
})->name('home');

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

Route::get('/multimedia', function () {
    return view('multimedia');
})->name('multimedia');

Route::get('/create-post', function () {
    return view('create-post');
})->name('create-post');

Route::get('/dashboard', function () {
    return view('dashboard');
});//->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
});//->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rss-videos', function () {
    try {
        $channelId = 'UCYLB6eCPQKjNwCyWbW_CFAQ';
        $url = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";

        $response = Http::withOptions([
            'verify' => false
        ])->get($url);

        if ($response->successful()) {
            return response($response->body(), 200)
                ->header('Content-Type', 'application/xml');
        }

        return response()->json(['error' => 'Impossible de récupérer le flux'], $response->status());
    } catch (\Exception $e) {
        return response()->json(['error' => 'Erreur serveur : ' . $e->getMessage()], 500);
    }
});

Route::post('/create-post', function () {
    // Handle the form submission for creating a post
    // You can use the request() helper to access the form data
    $data = request()->all();

    // Process the data and save it to the database or perform any other action

    return redirect()->route('dashboard')->with('success', 'Post created successfully!');
})->name('create-post.submit');

require __DIR__.'/auth.php';
