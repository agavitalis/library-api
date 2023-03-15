<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::middleware(['custom.restrict'])->group(function () {
    Route::get('/restricted-route', [BookController::class, 'getBooks']);
});


Route::middleware(['throttle:minute'])->group(function () {
    Route::get('/book', [BookController::class, 'getBooks']);
});


Route::middleware(['throttle:5,1'])->group(function () {
    Route::patch('/book', [BookController::class, 'updateBook']);
});

Route::middleware(['throttle:user'])->group(function () {
    Route::get('/book/{id}', [BookController::class, 'getBook']);
});

Route::middleware(['throttle:session'])->group(function () {
    Route::post('/book', [BookController::class, 'createBook']);
});

Route::middleware(['custom.throttle'])->group(function () {
    Route::get('/custom-route', [BookController::class, 'getBooks']);
});


Route::delete('/book/{id}', [BookController::class, 'deleteBook']);

