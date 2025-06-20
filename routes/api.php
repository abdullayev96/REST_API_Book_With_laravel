<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;         // yangi controller



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();});


Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::post('/customers', [CustomerController::class, 'store']);

//Route::put('/customers/{id}', [CustomerController::class, 'update']);
//Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
