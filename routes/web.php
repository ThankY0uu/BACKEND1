<?php

use App\Http\Controllers\RestaurantController;

Route::get('/restaurants', [RestaurantController::class, 'index']);
// Deze had je al (om het formulier te zien)
Route::get('/restaurants/nieuw', [RestaurantController::class, 'create']);

// Deze moet erbij (om de data op te slaan)
Route::post('/restaurants', [RestaurantController::class, 'store']);
Route::get('/restaurants/{id}/bewerken', [RestaurantController::class, 'edit']);
Route::post('/restaurants/{id}/update', [RestaurantController::class, 'update']);
Route::post('/restaurants/{id}/verwijderen', [RestaurantController::class, 'destroy']);
