<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Tweets de Usuarios
    Route::get('/tweets/{nickname}', [
        App\Http\Controllers\TweetsController::class, 'userTweets'
    ])->name('tweets.user');

    
});
