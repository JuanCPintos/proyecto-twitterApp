<?php

use Illuminate\Support\Facades\Route;

Route::get('/tweets', [
    App\Http\Controllers\TweetsController::class, 'index'
])->name('tweets');

Route::middleware('auth')->group(function () {

    // Tweets Base
    Route::get('/tweets/create', [
        App\Http\Controllers\TweetsController::class, 'create'
    ])->name('tweets.create');

    Route::post('/tweets', [
        App\Http\Controllers\TweetsController::class, 'store'
    ])->name('tweets.store');

    Route::get('/tweets/edit/{tweet}', [
        App\Http\Controllers\TweetsController::class, 'edit'
    ])->name('tweets.edit');

    Route::put('/tweets/{tweet}', [
        App\Http\Controllers\TweetsController::class, 'update'
    ])->name('tweets.update');

    Route::get('/tweets/delete/{tweet}', [
        App\Http\Controllers\TweetsController::class, 'delete'
    ])->name('tweets.delete');

    Route::delete('/tweets/{tweet}', [
        App\Http\Controllers\TweetsController::class, 'destroy'
    ])->name('tweets.destroy');


});
