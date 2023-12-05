<?php

use Illuminate\Support\Facades\Route;

// Tweets de Usuarios
Route::get('/users/profile/{nickname}', [
    App\Http\Controllers\UsersController::class, 'user'
])->name('users.profile');


// Route::middleware('auth')->group(function () {

// });
