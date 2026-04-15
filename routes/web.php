<?php

use App\Http\Controllers\GerechtenController;
use App\Http\Controllers\AuthController;

Route::get('/gerechten', [GerechtenController::class, 'index']);
Route::get('/gerechten/toevoegen', [GerechtenController::class, 'create']);
Route::post('/gerechten', [GerechtenController::class, 'store']);
Route::get('/gerechten/{id}/bewerken', [GerechtenController::class, 'edit']);
Route::post('/gerechten/{id}/update', [GerechtenController::class, 'update']);
Route::post('/gerechten/{id}/verwijderen', [GerechtenController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [GerechtenController::class, 'index'])->middleware('auth');
