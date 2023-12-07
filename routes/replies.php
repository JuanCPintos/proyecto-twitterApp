<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    //Respuestas a Tweets
    Route::get('/tweets/{tweet}/reply/create', [
        App\Http\Controllers\RepliesController::class, 'create'
    ])->name('reply.create');

    Route::post('/tweets/{tweet}/reply', [
        App\Http\Controllers\RepliesController::class, 'store'
    ])->name('reply.store');

    Route::get('/replies/{reply}/edit', [
        App\Http\Controllers\RepliesController::class, 'edit'
    ])->name('reply.edit');

    Route::put('/replies/{reply}', [
        App\Http\Controllers\RepliesController::class, 'update'
    ])->name('reply.update');

    Route::get('/replies/{reply}/delete', [
        App\Http\Controllers\RepliesController::class, 'delete'
    ])->name('reply.delete');

    Route::delete('/replies/{reply}', [
        App\Http\Controllers\RepliesController::class, 'destroy'
    ])->name('reply.destroy');
});