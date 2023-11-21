<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tweets',[
    App\Http\Controllers\TweetsController::class, 'index'
])->name('tweets');

Route::get('/tweets/create',[
    App\Http\Controllers\TweetsController::class, 'create'
])->name('tweets.create');

Route::post('/tweets/create',[
    App\Http\Controllers\TweetsController::class, 'store'
])->name('tweets.store');

Route::get('/tweets/edit/{tweet}',[
    App\Http\Controllers\TweetsController::class, 'edit'
])->name('tweets.edit');

Route::put('/tweets/edit/{tweet}',[
    App\Http\Controllers\TweetsController::class, 'update'
])->name('tweets.update');

Route::get('/tweets/delete/{tweet}',[
    App\Http\Controllers\TweetsController::class, 'delete'
])->name('tweets.delete');

Route::delete('/tweets/delete/{tweet}',[
    App\Http\Controllers\TweetsController::class, 'destroy'
])->name('tweets.destroy');
