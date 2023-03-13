<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/book', [BookController::class, 'getBooks']);
Route::get('/book/{id}', [BookController::class, 'getBook']);
Route::post('/book', [BookController::class, 'createBook']);
Route::patch('/book', [BookController::class, 'updateBook']);
Route::delete('/book/{id}', [BookController::class, 'deleteBook']);

