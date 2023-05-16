<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(CountryController::class)->group(function() {
    Route::get('/countries', 'index');
    Route::post('/country', 'store');
    Route::get('/country/{id}', 'show');
    Route::put('/country/{id}', 'update');
    Route::delete('/country/{id}', 'destroy');
    
});

Route::controller(TeamController::class)->group(function() {
    Route::get('/teams', 'index');
    Route::post('/team', 'store');
    Route::get('/team/{id}', 'show');
    Route::put('/team/{id}', 'update');
    Route::delete('/team/{id}', 'destroy');
});

Route::controller(PlayerController::class)->group(function() {
    Route::get('/players', 'index');
    Route::post('/player', 'store');
    Route::get('/player/{id}', 'show');
    Route::put('/player/{id}', 'update');
    Route::delete('/player/{id}', 'destroy');
});