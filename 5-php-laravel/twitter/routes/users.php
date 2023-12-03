<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Tweets de Usuarios
    Route::get('/users/profile/{nickname}', [
        App\Http\Controllers\UsersController::class, 'user'
    ])->name('users.profile');

    
});
