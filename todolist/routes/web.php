<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;

// Web Route for Home Page
Route::get('/', function () {
    return view('welcome');
});

// API routes for item management
#Route::get('/items', [ItemController::class, 'index']);

#Route::prefix('/item')->group(function () {
    #Route::post('/store', [ItemController::class, 'store']);
    #Route::put('/{id}', [ItemController::class, 'update']);
    #Route::delete('/{id}', [ItemController::class, 'destroy']);
#});


