<?php

use App\Http\Controllers\GerechtenController;

Route::get('/gerechten', [GerechtenController::class, 'index']);
Route::get('/gerechten/toevoegen', [GerechtenController::class, 'create']);
Route::post('/gerechten', [GerechtenController::class, 'store']);
Route::get('/gerechten/{id}/bewerken', [GerechtenController::class, 'edit']);
Route::post('/gerechten/{id}/update', [GerechtenController::class, 'update']);
Route::post('/gerechten/{id}/verwijderen', [GerechtenController::class, 'destroy']);
