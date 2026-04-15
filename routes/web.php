<?php

use App\Http\Controllers\GerechtenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
Route::get('/admin/dashboard', [AuthController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin/berichten', [ContactController::class, 'berichten'])->middleware('auth');
Route::get('/gerechten', [GerechtenController::class, 'index']);
Route::get('/gerechten/toevoegen', [GerechtenController::class, 'create']);
Route::post('/gerechten', [GerechtenController::class, 'store']);
Route::get('/gerechten/{id}/bewerken', [GerechtenController::class, 'edit']);
Route::post('/gerechten/{id}/update', [GerechtenController::class, 'update']);
Route::post('/gerechten/{id}/verwijderen', [GerechtenController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', function() {
    return view('admin.dashboard');
})->middleware('auth');
